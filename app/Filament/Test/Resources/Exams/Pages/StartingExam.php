<?php

namespace App\Filament\Test\Resources\Exams\Pages;

use App\Filament\Test\Resources\Exams\ExamResource;
use App\Models\Answer;
use App\Models\Exam;
use App\Models\ExamHistory;
use App\Models\ExamHistoryAnswer;
use App\Models\Question;
use App\Models\Subject;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class StartingExam extends Page
{
    protected static string $resource = ExamResource::class;

    protected string $view = 'filament.test.resources.exams.pages.starting-exam';

    public function getBreadcrumbs(): array
    {
        return [];
    }

    public function getHeading(): string | \Illuminate\Contracts\Support\Htmlable | null
    {
        return null;
    }

    public ?int $examId = null;
    public ?int $historyId = null;
    public ?Exam $examRecord = null;

    // --- Alur per-mapel ---
    public ?int $subjectId = null;
    public ?Subject $subjectRecord = null;
    /** @var array<int, array{id:int,name:string,qty:int,status:string}> */
    public array $availableSubjects = [];
    /** True jika periode ujian sudah tutup untuk MEMULAI mapel baru (resume & lihat hasil tetap boleh). */
    public bool $examClosedForNew = false;

    public array $questions = [];
    public int $currentIndex = 0;
    public array $answers = [];
    public array $doubtfuls = [];

    public int $violationCount = 0;
    public int $targetEndTimestamp = 0; // ms Unix timestamp

    public bool $isFinished = false;
    public array $resultData = [];
    public string $finishReason = '';

    public bool $isTimeTruncated = false;
    public ?string $truncatedReason = null;
    public int $actualDurationMinutes = 0;

    public array $reviewQuestions = [];
    public string $reviewFilter = 'all'; // all, correct, wrong, unanswered

    public function mount(Exam $exam): void
    {
        $this->examRecord = $exam;
        $this->examId = $exam->id;

        $user = Auth::user();
        $student = $user->student;

        if (! $student) {
            Notification::make()
                ->title('Akun bukan siswa')
                ->body('Hanya akun siswa yang dapat mengakses lembar ujian.')
                ->danger()
                ->send();

            $this->redirect(ExamResource::getUrl('index'));

            return;
        }

        // Validasi jendela waktu ujian (berlaku untuk semua mapel).
        // Definisi tunggal ada di Exam::isOpenForNewAttempts().
        if (! $exam->is_available) {
            Notification::make()
                ->title('Ujian Tidak Tersedia')
                ->body('Ujian ini sedang dinonaktifkan oleh admin.')
                ->danger()
                ->send();

            $this->redirect(ExamResource::getUrl('index'));

            return;
        }

        $now = now();
        if ($exam->started_at && $exam->started_at->isFuture()) {
            Notification::make()
                ->title('Ujian Belum Dimulai')
                ->body('Ujian ini baru akan dibuka pada '.$exam->started_at->translatedFormat('d F Y H:i'))
                ->warning()
                ->send();

            $this->redirect(ExamResource::getUrl('index'));

            return;
        }

        // Selesaikan otomatis sesi yang sudah lewat durasi/expired agar tidak
        // ada status 'in_progress' yang nyangkut (mis. user menutup tab).
        // Halaman ini tetap dibuka setelah expired agar resume yang kedaluwarsa
        // bisa difinalisasi dan hasil tetap bisa dilihat via deep-link Riwayat.
        $autoFinished = ExamHistory::autoSubmitExpiredForStudent($student->id, $exam->id);

        $this->refreshSubjectList($student, $exam);

        if ($autoFinished > 0) {
            Notification::make()
                ->title('Sesi kedaluwarsa diselesaikan otomatis')
                ->body("{$autoFinished} sesi yang sudah lewat waktu telah dinilai otomatis dan masuk ke Riwayat Ujian.")
                ->warning()
                ->send();
        }

        // Dukung deep-link ?subject=ID (dari tabel riwayat)
        $requestedSubject = (int) (request()->query('subject') ?? 0);
        if ($requestedSubject > 0) {
            $this->chooseSubject($requestedSubject, true);

            return;
        }

        // Belum pilih mapel -> tampilkan pemilih mapel (blade).
        if ($this->isTimeTruncated && ! $this->isFinished) {
            Notification::make()
                ->title('⚠️ Waktu Pengerjaan Terpotong')
                ->body($this->truncatedReason)
                ->warning()
                ->persistent()
                ->send();
        }
    }

    /** Susun daftar mapel + status pengerjaan siswa (1x per mapel). */
    protected function refreshSubjectList($student, Exam $exam): void
    {
        // Pastikan daftar tidak menampilkan 'sedang' untuk sesi yang
        // sebenarnya sudah lewat deadline.
        ExamHistory::autoSubmitExpiredForStudent($student->id, $exam->id);

        $exam->load('subjects');

        $this->examClosedForNew = ! $exam->isOpenForNewAttempts();

        $histories = ExamHistory::where('exam_id', $exam->id)
            ->where('student_id', $student->id)
            ->get()
            ->keyBy('subject_id');

        $list = [];
        foreach ($exam->subjects as $subject) {
            $qty = (int) ($subject->pivot->qty ?? 0);
            if ($qty <= 0) {
                continue;
            }

            // Clamp qty agar tidak melebihi jumlah soal aktif yang tersedia
            $availableCount = Question::where('subject_id', $subject->id)
                ->where('is_active', true)
                ->count();
            $qty = min($qty, $availableCount);

            if ($qty <= 0) {
                continue;
            }

            $history = $histories->get($subject->id);
            $status = 'belum'; // belum | sedang | selesai
            if ($history) {
                $status = $history->status === 'in_progress' ? 'sedang' : 'selesai';
            }

            $list[] = [
                'id' => $subject->id,
                'name' => $subject->name,
                'qty' => $qty,
                'status' => $status,
            ];
        }

        $this->availableSubjects = $list;
    }

    /** Siswa memilih satu mapel sebelum mulai. */
    public function chooseSubject(int $subjectId, bool $allowFinishedView = false): void
    {
        $student = Auth::user()?->student;
        $exam = $this->examRecord ?? Exam::with('subjects')->find($this->examId);

        if (! $student || ! $exam) {
            return;
        }

        $subject = $exam->subjects->firstWhere('id', $subjectId);

        if (! $subject) {
            Notification::make()->title('Mata pelajaran tidak valid')->danger()->send();

            return;
        }

        $qty = (int) ($subject->pivot->qty ?? 0);
        if ($qty <= 0) {
            Notification::make()->title('Mata pelajaran belum punya jumlah soal')->warning()->send();

            return;
        }

        $this->subjectId = $subject->id;
        $this->subjectRecord = Subject::find($subject->id);

        // Reset state sesi sebelumnya (penting saat pindah mapel)
        $this->historyId = null;
        $this->questions = [];
        $this->answers = [];
        $this->doubtfuls = [];
        $this->currentIndex = 0;
        $this->isFinished = false;
        $this->resultData = [];
        $this->finishReason = '';
        $this->violationCount = 0;
        $this->isTimeTruncated = false;
        $this->truncatedReason = null;
        $this->reviewQuestions = [];
        $this->reviewFilter = 'all';

        $history = ExamHistory::where('exam_id', $exam->id)
            ->where('student_id', $student->id)
            ->where('subject_id', $subject->id)
            ->first();

        // Periode tutup -> mapel baru tidak boleh dimulai (resume & lihat hasil tetap boleh).
        if (! $history && ! $exam->isOpenForNewAttempts()) {
            Notification::make()
                ->title('Periode Ujian Telah Berakhir')
                ->body('Mapel baru sudah tidak dapat dimulai. Anda masih bisa melanjutkan sesi berjalan atau melihat hasil.')
                ->warning()
                ->send();

            $this->subjectId = null;
            $this->subjectRecord = null;
            $this->refreshSubjectList($student, $exam);

            return;
        }

        if ($history) {
            // Kebijakan 1x: mapel yang sudah selesai hasilnya hanya via menu Riwayat.
            // Akses langsung (deep-link ?subject=) dari Riwayat tetap diizinkan agar
            // tombol "Lihat Hasil" di Riwayat tetap berfungsi.
            if ($history->status !== 'in_progress') {
                if (! $allowFinishedView) {
                    Notification::make()
                        ->title('Mapel sudah selesai')
                        ->body('Hasil ujian per mapel hanya dapat dilihat melalui menu Riwayat Ujian.')
                        ->warning()
                        ->send();

                    $this->subjectId = null;
                    $this->subjectRecord = null;
                    $this->historyId = null;
                    $this->isFinished = false;
                    $this->resultData = [];
                    $this->refreshSubjectList($student, $exam);

                    return;
                }

                $this->historyId = $history->id;
                $this->violationCount = $history->violation_count;
                $this->isFinished = true;
                $this->loadResultData($history);

                return;
            }

            $this->historyId = $history->id;
            $this->violationCount = $history->violation_count;

            $deadline = $this->calculateDeadline($history, $exam);
            if (now()->greaterThanOrEqualTo($deadline)) {
                $this->submitExam(isTimeout: true);

                return;
            }

            $this->targetEndTimestamp = $deadline->getTimestamp() * 1000;
            $this->loadExistingQuestions($history);
        } else {
            $this->initNewExamSession($student, $exam, $subject, $qty);
        }

        $this->refreshSubjectList($student, $exam);

        if ($this->isTimeTruncated && ! $this->isFinished) {
            Notification::make()
                ->title('⚠️ Waktu Pengerjaan Terpotong')
                ->body($this->truncatedReason)
                ->warning()
                ->persistent()
                ->send();
        }
    }

    /** Kembali ke daftar mapel (hanya jika tidak sedang mengerjakan). */
    public function backToSubjects(): void
    {
        // Jika waktu sudah habis, selesaikan otomatis dulu agar tidak
        // terjebak di "Sesi ujian sedang berjalan" selamanya.
        $this->autoSubmitIfExpired();

        $history = $this->historyId ? ExamHistory::find($this->historyId) : null;

        if ($history && $history->status === 'in_progress') {
            Notification::make()
                ->title('Sesi ujian sedang berjalan')
                ->body('Selesaikan atau biarkan waktu habis sebelum berpindah mapel.')
                ->warning()
                ->send();

            return;
        }

        $student = Auth::user()?->student;
        if ($student && $this->examRecord) {
            $this->refreshSubjectList($student, $this->examRecord);
        }

        $this->subjectId = null;
        $this->subjectRecord = null;
        $this->historyId = null;
        $this->questions = [];
        $this->answers = [];
        $this->doubtfuls = [];
        $this->currentIndex = 0;
        $this->isFinished = false;
        $this->resultData = [];
        $this->finishReason = '';
        $this->violationCount = 0;
        $this->reviewQuestions = [];
        $this->reviewFilter = 'all';
    }

    protected function calculateDeadline(ExamHistory $history, Exam $exam)    {
        $durationDeadline = $history->started_at->copy()->addMinutes($exam->duration);
        if ($exam->expired_at && $durationDeadline->greaterThan($exam->expired_at)) {
            $this->isTimeTruncated = true;
            $remainingSeconds = max(0, now()->diffInSeconds($exam->expired_at, false));
            $this->actualDurationMinutes = (int) max(1, ceil($remainingSeconds / 60));
            $this->truncatedReason = "Durasi asli ujian adalah {$exam->duration} menit, namun karena Anda mulai mendekati batas waktu ujian ({$exam->expired_at->translatedFormat('H:i')}), sisa waktu Anda disesuaikan menjadi ±{$this->actualDurationMinutes} menit.";

            return $exam->expired_at;
        }

        return $durationDeadline;
    }

    /**
     * Cek deadline sesi aktif; jika sudah lewat, selesaikan otomatis sebagai
     * timeout dan tampilkan hasil. Return true jika sesi baru saja
     * difinalisasi (pemanggil harus berhenti).
     */
    protected function autoSubmitIfExpired(): bool
    {
        if (! $this->historyId) {
            return false;
        }

        $history = ExamHistory::with('exam')->find($this->historyId);
        if (! $history || $history->status !== 'in_progress') {
            return false;
        }

        if (! $history->isDeadlinePassed($history->exam)) {
            return false;
        }

        $this->submitExam(isTimeout: true);

        Notification::make()
            ->title('Waktu habis')
            ->body('Durasi pengerjaan telah lewat, jawaban otomatis diserahkan dan dinilai.')
            ->warning()
            ->send();

        return true;
    }

    protected function initNewExamSession($student, Exam $exam, $subject, int $qty): void
    {
        // Clamp qty agar tidak melebihi jumlah soal aktif yang tersedia
        $availableCount = Question::where('subject_id', $subject->id)
            ->where('is_active', true)
            ->count();
        $qty = min($qty, $availableCount);

        $questions = Question::where('subject_id', $subject->id)
            ->where('is_active', true)
            ->with(['answers' => fn ($query) => $query->where('is_active', true)->inRandomOrder()])
            ->inRandomOrder()
            ->limit($qty)
            ->get();

        $allQuestions = [];
        foreach ($questions as $q) {
            $allQuestions[] = [
                'id' => $q->id,
                'subject_name' => $subject->name,
                'payload' => $q->payload,
                'score' => $q->score ?? 1,
                'answers' => $q->answers->map(fn ($a) => [
                    'id' => $a->id,
                    'text' => $a->text,
                ])->toArray(),
            ];
        }

        $optionsOrder = [];
        foreach ($allQuestions as $q) {
            $optionsOrder[$q['id']] = array_column($q['answers'], 'id');
        }

        $history = ExamHistory::create([
            'exam_id' => $exam->id,
            'subject_id' => $subject->id,
            'student_id' => $student->id,
            'started_at' => now(),
            'total_questions' => count($allQuestions),
            'threshold' => $exam->threshold ?? 50,
            'status' => 'in_progress',
            'violation_count' => 0,
            'question_order' => array_column($allQuestions, 'id'),
            'options_order' => $optionsOrder,
        ]);

        $this->historyId = $history->id;
        $deadline = $this->calculateDeadline($history, $exam);
        $this->targetEndTimestamp = $deadline->getTimestamp() * 1000;

        foreach ($allQuestions as $q) {
            ExamHistoryAnswer::create([
                'exam_history_id' => $history->id,
                'question_id' => $q['id'],
                'selected_answer_id' => null,
                'is_correct' => false,
                'score_earned' => 0,
                'is_doubtful' => false,
            ]);
        }

        Cache::put("exam_session_{$history->id}_questions", $allQuestions, now()->addHours(24));
        $this->questions = $allQuestions;
    }

    protected function loadExistingQuestions(ExamHistory $history): void
    {
        $cached = Cache::get("exam_session_{$history->id}_questions");

        if ($cached && is_array($cached)) {
            $this->questions = $cached;
            if (empty($history->options_order)) {
                $optsOrder = [];
                foreach ($cached as $cq) {
                    if (isset($cq['id'], $cq['answers'])) {
                        $optsOrder[$cq['id']] = array_column($cq['answers'], 'id');
                    }
                }
                if (! empty($optsOrder)) {
                    $history->update(['options_order' => $optsOrder]);
                }
            }
        } else {
            $order = $history->question_order ?? [];
            $optionsOrder = $history->options_order ?? [];
            $questions = Question::whereIn('id', $order)
                ->with(['subject', 'answers' => fn ($q) => $q->where('is_active', true)])
                ->get()
                ->keyBy('id');

            $allQuestions = [];
            foreach ($order as $qId) {
                if (isset($questions[$qId])) {
                    $q = $questions[$qId];

                    $rawAnswers = $q->answers;
                    $targetOrder = $optionsOrder[$qId] ?? null;
                    if ($targetOrder && is_array($targetOrder)) {
                        $sorted = [];
                        $answersById = $rawAnswers->keyBy('id');
                        foreach ($targetOrder as $ansId) {
                            if (isset($answersById[$ansId])) {
                                $sorted[] = $answersById[$ansId];
                            }
                        }
                        foreach ($rawAnswers as $ans) {
                            if (! in_array($ans->id, $targetOrder)) {
                                $sorted[] = $ans;
                            }
                        }
                        $rawAnswers = collect($sorted);
                    }

                    $allQuestions[] = [
                        'id' => $q->id,
                        'subject_name' => $q->subject?->name ?? 'Mata Pelajaran',
                        'payload' => $q->payload,
                        'score' => $q->score ?? 1,
                        'answers' => $rawAnswers->map(fn ($a) => [
                            'id' => $a->id,
                            'text' => $a->text,
                        ])->toArray(),
                    ];
                }
            }
            $this->questions = $allQuestions;
            Cache::put("exam_session_{$history->id}_questions", $allQuestions, now()->addHours(24));
        }

        $savedAnswers = ExamHistoryAnswer::where('exam_history_id', $history->id)->get();
        foreach ($savedAnswers as $sa) {
            if ($sa->selected_answer_id) {
                $this->answers[$sa->question_id] = $sa->selected_answer_id;
            }
            $this->doubtfuls[$sa->question_id] = (bool) $sa->is_doubtful;
        }
    }

    public function selectQuestion(int $index): void
    {
        if (isset($this->questions[$index])) {
            $this->currentIndex = $index;
        }
    }

    public function nextQuestion(): void
    {
        if ($this->currentIndex < count($this->questions) - 1) {
            $this->currentIndex++;
        }
    }

    public function prevQuestion(): void
    {
        if ($this->currentIndex > 0) {
            $this->currentIndex--;
        }
    }

    public function saveAnswer(int $questionId, int $answerId): void
    {
        if ($this->isFinished || ! $this->historyId) {
            return;
        }

        if ($this->autoSubmitIfExpired()) {
            return;
        }

        $this->answers[$questionId] = $answerId;

        $answer = Answer::find($answerId);
        $question = Question::find($questionId);

        $isCorrect = $answer && $answer->is_correct;
        $scoreEarned = $isCorrect ? ($question->score ?? 1) : 0;

        ExamHistoryAnswer::updateOrCreate(
            [
                'exam_history_id' => $this->historyId,
                'question_id' => $questionId,
            ],
            [
                'selected_answer_id' => $answerId,
                'is_correct' => $isCorrect,
                'score_earned' => $scoreEarned,
            ]
        );
    }

    public function toggleDoubtful(int $questionId): void
    {
        if ($this->isFinished || ! $this->historyId) {
            return;
        }

        if ($this->autoSubmitIfExpired()) {
            return;
        }

        $current = $this->doubtfuls[$questionId] ?? false;
        $this->doubtfuls[$questionId] = ! $current;

        ExamHistoryAnswer::where('exam_history_id', $this->historyId)
            ->where('question_id', $questionId)
            ->update([
                'is_doubtful' => $this->doubtfuls[$questionId],
            ]);
    }

    public function recordViolation(): void
    {
        if ($this->isFinished || ! $this->historyId) {
            return;
        }

        if ($this->autoSubmitIfExpired()) {
            return;
        }

        // Ambil nilai terbaru dari DB agar tidak terjadi race saat
        // blur + visibilitychange menembak berurutan.
        $history = ExamHistory::find($this->historyId);
        if (! $history || $history->status !== 'in_progress') {
            return;
        }

        $this->violationCount = ((int) $history->violation_count) + 1;

        $history->update([
            'violation_count' => $this->violationCount,
        ]);

        // Aturan: pelanggaran 1 & 2 = warning, pelanggaran ke-3 = paksa selesai.
        if ($this->violationCount >= 3) {
            $this->finishReason = 'terminated_cheat';
            $this->submitExam(isTerminatedCheat: true);
        } else {
            $this->dispatch('show-cheat-warning', [
                'count' => $this->violationCount,
                'remaining' => 3 - $this->violationCount,
            ]);
        }
    }

    public function submitExam(bool $isTimeout = false, bool $isTerminatedCheat = false): void
    {
        if (! $this->historyId) {
            return;
        }

        $history = ExamHistory::with('answers.question')->find($this->historyId);
        if (! $history) {
            return;
        }

        if ($history->status === 'in_progress') {
            $status = 'completed';
            if ($isTerminatedCheat) {
                $status = 'terminated_cheat';
            } elseif ($isTimeout) {
                $status = 'timeout_auto_submit';
            }

            // Penilaian otoritatif dari DB (tidak bergantung $this->questions
            // yang bisa kosong saat auto-submit dari chooseSubject/mount).
            $history = ExamHistory::finalize($history, $status);
            $this->finishReason = $status;
        }

        $this->isFinished = true;
        $this->loadResultData($history->fresh());

        // Segarkan status mapel agar tombol kembali terkunci dengan benar
        $student = Auth::user()?->student;
        if ($student && $this->examRecord) {
            $this->refreshSubjectList($student, $this->examRecord);
        }
    }

    protected function loadResultData(ExamHistory $history): void
    {
        $history->loadMissing(['exam', 'subject']);

        $this->resultData = [
            'exam_title' => $history->exam?->title ?? 'Ujian',
            'subject_name' => $history->subject?->name ?? $this->subjectRecord?->name ?? '-',
            'score' => (float) $history->score,
            'threshold' => (float) $history->threshold,
            'is_passed' => (bool) $history->is_passed,
            'status' => $history->status,
            'violation_count' => $history->violation_count,
            'total_questions' => $history->total_questions,
            'correct_count' => $history->correct_count,
            'wrong_count' => $history->wrong_count,
            'unanswered_count' => $history->unanswered_count,
            'started_at' => $history->started_at?->translatedFormat('d F Y, H:i:s'),
            'finished_at' => $history->finished_at?->translatedFormat('d F Y, H:i:s'),
            'duration_formatted' => gmdate('H:i:s', abs((int) $history->duration_spent_seconds)),
        ];

        $this->loadReviewQuestions($history);
    }

    public function setReviewFilter(string $filter): void
    {
        if (in_array($filter, ['all', 'correct', 'wrong', 'unanswered'])) {
            $this->reviewFilter = $filter;
        }
    }

    protected function loadReviewQuestions(ExamHistory $history): void
    {
        // Keamanan: Jangan muat kunci jawaban jika status masih in_progress
        if ($history->status === 'in_progress') {
            $this->reviewQuestions = [];

            return;
        }

        $order = $history->question_order ?? [];
        $optionsOrder = $history->options_order ?? [];
        $historyAnswers = ExamHistoryAnswer::where('exam_history_id', $history->id)
            ->get()
            ->keyBy('question_id');

        $cachedSession = Cache::get("exam_session_{$history->id}_questions");
        $cachedMap = [];
        if (is_array($cachedSession)) {
            foreach ($cachedSession as $cq) {
                if (isset($cq['id'])) {
                    $cachedMap[$cq['id']] = $cq;
                }
            }
        }

        // Backfill options_order ke database jika di DB masih kosong tapi di cache ada
        if (empty($optionsOrder) && ! empty($cachedMap)) {
            $optionsOrder = [];
            foreach ($cachedMap as $qId => $cq) {
                if (isset($cq['answers'])) {
                    $optionsOrder[$qId] = array_column($cq['answers'], 'id');
                }
            }
            if (! empty($optionsOrder)) {
                $history->update(['options_order' => $optionsOrder]);
            }
        }

        $orderedIds = ! empty($order) ? $order : $historyAnswers->keys()->toArray();

        $questions = Question::whereIn('id', $orderedIds)
            ->with(['answers' => fn ($q) => $q->where('is_active', true)])
            ->get()
            ->keyBy('id');

        $list = [];
        $number = 1;

        foreach ($orderedIds as $qId) {
            if (! isset($questions[$qId])) {
                continue;
            }

            $q = $questions[$qId];
            $ha = $historyAnswers->get($qId);

            $selectedAnswerId = $ha?->selected_answer_id;
            $isCorrect = (bool) ($ha?->is_correct ?? false);
            $isUnanswered = is_null($selectedAnswerId);

            $status = $isUnanswered ? 'unanswered' : ($isCorrect ? 'correct' : 'wrong');

            // Susun urutan opsi jawaban persis seperti saat ujian
            $rawAnswers = $q->answers;
            $targetOrder = $optionsOrder[$qId] ?? (isset($cachedMap[$qId]['answers']) ? array_column($cachedMap[$qId]['answers'], 'id') : null);

            if ($targetOrder && is_array($targetOrder)) {
                $sorted = [];
                $answersById = $rawAnswers->keyBy('id');
                foreach ($targetOrder as $ansId) {
                    if (isset($answersById[$ansId])) {
                        $sorted[] = $answersById[$ansId];
                    }
                }
                foreach ($rawAnswers as $ans) {
                    if (! in_array($ans->id, $targetOrder)) {
                        $sorted[] = $ans;
                    }
                }
                $rawAnswers = collect($sorted);
            }

            $answersData = [];
            foreach ($rawAnswers as $ans) {
                $answersData[] = [
                    'id' => $ans->id,
                    'text' => $ans->text,
                    'is_correct' => (bool) $ans->is_correct,
                    'is_selected' => ($selectedAnswerId !== null && (int) $selectedAnswerId === (int) $ans->id),
                ];
            }

            $list[] = [
                'number' => $number++,
                'question_id' => $q->id,
                'payload' => $q->payload,
                'description' => $q->description,
                'score_earned' => $ha?->score_earned ?? 0,
                'max_score' => $q->score ?? 1,
                'status' => $status,
                'selected_answer_id' => $selectedAnswerId,
                'answers' => $answersData,
            ];
        }

        $this->reviewQuestions = $list;
    }

    public function getAnsweredCountProperty(): int
    {
        return count(array_filter($this->answers));
    }

    public function getDoubtfulCountProperty(): int
    {
        return count(array_filter($this->doubtfuls));
    }
}
