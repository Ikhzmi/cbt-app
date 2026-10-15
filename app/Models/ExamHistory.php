<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExamHistory extends Model
{
    protected $guarded = [];

    protected $casts = [
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
        'score' => 'decimal:2',
        'threshold' => 'decimal:2',
        'is_passed' => 'boolean',
        'violation_count' => 'integer',
        'question_order' => 'array',
        'options_order' => 'array',
    ];

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function answers(): HasMany
    {
        return $this->hasMany(ExamHistoryAnswer::class);
    }

    /**
     * Batas akhir pengerjaan satu sesi mapel.
     * = min(started_at + durasi ujian, expired_at ujian).
     */
    public function deadline(?Exam $exam = null): ?\Carbon\CarbonInterface
    {
        $exam ??= $this->relationLoaded('exam') ? $this->exam : $this->exam()->first();

        if (! $this->started_at) {
            return null;
        }

        $durationDeadline = $this->started_at->copy()->addMinutes((int) ($exam?->duration ?? 0));

        if ($exam?->expired_at && $durationDeadline->greaterThan($exam->expired_at)) {
            return $exam->expired_at;
        }

        return $durationDeadline;
    }

    public function isDeadlinePassed(?Exam $exam = null, ?\Carbon\CarbonInterface $now = null): bool
    {
        $deadline = $this->deadline($exam);

        if (! $deadline) {
            return false;
        }

        return ($now ?? now())->greaterThanOrEqualTo($deadline);
    }

    /**
     * Finalisasi server-side yang otoritatif (tidak bergantung state Livewire).
     * Dipakai untuk auto-submit saat durasi/expired lewat agar tidak ada
     * status 'in_progress' yang nyangkut.
     */
    public static function finalize(self $history, string $status = 'timeout_auto_submit'): self
    {
        $history = $history->fresh() ?? $history;

        if ($history->status !== 'in_progress') {
            return $history;
        }

        $order = $history->question_order ?? [];
        $totalQuestions = is_array($order) && count($order) > 0
            ? count($order)
            : (int) ($history->total_questions ?? 0);

        $historyAnswers = ExamHistoryAnswer::where('exam_history_id', $history->id)
            ->with('question')
            ->get();

        // Fallback: kalau baris jawaban belum ada, hitung dari order.
        if ($historyAnswers->isEmpty() && $totalQuestions <= 0) {
            $totalQuestions = 0;
        }

        $answeredCount = 0;
        $correctCount = 0;
        $wrongCount = 0;
        $totalScoreEarned = 0;
        $totalMaxScore = 0;

        foreach ($historyAnswers as $ha) {
            $qScore = $ha->question->score ?? 1;
            $totalMaxScore += $qScore;

            if ($ha->selected_answer_id) {
                $answeredCount++;
                if ($ha->is_correct) {
                    $correctCount++;
                    $totalScoreEarned += $ha->score_earned;
                } else {
                    $wrongCount++;
                }
            }
        }

        if ($totalQuestions <= 0) {
            $totalQuestions = max($historyAnswers->count(), 0);
        }

        $unansweredCount = max(0, $totalQuestions - $answeredCount);

        $finalScore = $totalMaxScore > 0
            ? round(($totalScoreEarned / $totalMaxScore) * 100, 2)
            : 0;

        $deadline = $history->deadline();
        $finishedAt = now();

        // Jika status timeout/waktu habis ATAU waktu server saat ini sudah melewati deadline,
        // kunci waktu selesai tepat pada batas deadline resmi agar durasi tidak membengkak melebihi jatah ujian.
        if ($deadline && ($finishedAt->greaterThan($deadline) || $status === 'timeout_auto_submit')) {
            $finishedAt = $deadline;
        }

        $durationSpentSeconds = $history->started_at
            ? (int) abs($history->started_at->diffInSeconds($finishedAt))
            : 0;

        $history->update([
            'finished_at' => $finishedAt,
            'duration_spent_seconds' => $durationSpentSeconds,
            'total_questions' => $totalQuestions,
            'correct_count' => $correctCount,
            'wrong_count' => $wrongCount,
            'unanswered_count' => $unansweredCount,
            'score' => $finalScore,
            'is_passed' => $finalScore >= (float) $history->threshold,
            'status' => $status,
        ]);

        return $history->fresh() ?? $history;
    }

    /**
     * Selesaikan otomatis semua sesi in_progress yang sudah lewat deadline
     * untuk satu siswa (opsional dibatasi satu ujian). Return jumlah diselesaikan.
     */
    public static function autoSubmitExpiredForStudent(int $studentId, ?int $examId = null): int
    {
        $query = self::where('student_id', $studentId)
            ->where('status', 'in_progress')
            ->with('exam');

        if ($examId) {
            $query->where('exam_id', $examId);
        }

        $count = 0;
        foreach ($query->get() as $history) {
            if ($history->isDeadlinePassed($history->exam)) {
                self::finalize($history, 'timeout_auto_submit');
                $count++;
            }
        }

        return $count;
    }
}
