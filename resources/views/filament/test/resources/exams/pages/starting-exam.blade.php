<x-filament-panels::page>
    @vite(['resources/css/app.css'])

    <style>
        .cbt-exam-wrapper svg {
            display: inline-block;
            vertical-align: middle;
            flex-shrink: 0;
        }
        .cbt-exam-wrapper svg.w-4 { width: 1rem !important; height: 1rem !important; max-width: 1rem !important; max-height: 1rem !important; }
        .cbt-exam-wrapper svg.w-5 { width: 1.25rem !important; height: 1.25rem !important; max-width: 1.25rem !important; max-height: 1.25rem !important; }
        .cbt-exam-wrapper svg.w-6 { width: 1.5rem !important; height: 1.5rem !important; max-width: 1.5rem !important; max-height: 1.5rem !important; }
        .cbt-exam-wrapper svg.w-7 { width: 1.75rem !important; height: 1.75rem !important; max-width: 1.75rem !important; max-height: 1.75rem !important; }
        /* Paksa kanvas halaman ikut tema: hilangkan sisa putih saat dark mode */
        .cbt-exam-page {
            background-color: #f3f4f6;
            color: #111827;
        }
        .dark .cbt-exam-page {
            background-color: #000000;
            color: #e5e7eb;
        }

        /* Sticky Header Ujian: tidak bertumpang tindih dengan topbar/heading Filament */
        .cbt-sticky-header {
            position: sticky;
            top: calc(var(--topbar-height, 4rem) + 0.75rem) !important;
            z-index: 20 !important;
        }
        @media (max-width: 640px) {
            .cbt-sticky-header {
                top: calc(var(--topbar-height, 4rem) + 0.5rem) !important;
            }
        }

        /* Pilihan Jawaban - Tampilan Normal & Terpilih */
        .cbt-answer-card {
            transition: all 0.15s ease-in-out;
            border-width: 2px !important;
        }

        /* State: Belum Terpilih (Light Mode) */
        .cbt-answer-card:not(.is-selected) {
            border-color: #e5e7eb !important;
            background-color: #ffffff !important;
        }
        .cbt-answer-card:not(.is-selected):hover {
            border-color: #38bdf8 !important;
            background-color: #f8fafc !important;
        }
        .cbt-answer-card:not(.is-selected) .cbt-answer-text {
            color: #1f2937 !important;
        }

        /* State: Belum Terpilih (Dark Mode) */
        .dark .cbt-answer-card:not(.is-selected) {
            border-color: #1f2937 !important;
            background-color: #111827 !important;
        }
        .dark .cbt-answer-card:not(.is-selected):hover {
            border-color: #374151 !important;
            background-color: #1f2937 !important;
        }
        .dark .cbt-answer-card:not(.is-selected) .cbt-answer-text {
            color: #e5e7eb !important;
        }

        /* State: Terpilih (Light Mode) */
        .cbt-answer-card.is-selected {
            border-color: #0284c7 !important;
            background-color: #f0f9ff !important;
        }
        .cbt-answer-card.is-selected .cbt-answer-text {
            color: #0c4a6e !important;
            font-weight: 600 !important;
        }

        /* State: Terpilih (Dark Mode) - FIX FONT TIDAK TAMPAK */
        .dark .cbt-answer-card.is-selected {
            border-color: #38bdf8 !important;
            background-color: #0c233c !important; /* Biru malam elegan */
        }
        .dark .cbt-answer-card.is-selected .cbt-answer-text {
            color: #f0f9ff !important; /* Putih terang kontras tinggi */
            font-weight: 600 !important;
        }

        /* Review Options Styling (Kunci Jawaban & Pilihan Siswa) */
        .cbt-review-card {
            border-width: 2px !important;
            transition: all 0.15s ease-in-out;
        }

        /* 1. Siswa Menjawab BENAR (Selected & Correct) */
        .cbt-review-card.is-correct-selected {
            border-color: #10b981 !important;
            background-color: #ecfdf5 !important;
        }
        .cbt-review-card.is-correct-selected .cbt-review-letter {
            background-color: #059669 !important;
            color: #ffffff !important;
        }
        .cbt-review-card.is-correct-selected .cbt-review-text {
            color: #064e3b !important;
            font-weight: 600 !important;
        }
        .dark .cbt-review-card.is-correct-selected {
            border-color: #10b981 !important;
            background-color: #06281e !important;
        }
        .dark .cbt-review-card.is-correct-selected .cbt-review-letter {
            background-color: #10b981 !important;
            color: #000000 !important;
        }
        .dark .cbt-review-card.is-correct-selected .cbt-review-text {
            color: #f0fdf4 !important;
            font-weight: 600 !important;
        }

        /* 2. Siswa Menjawab SALAH (Selected & Wrong) */
        .cbt-review-card.is-wrong-selected {
            border-color: #f43f5e !important;
            background-color: #fff1f2 !important;
        }
        .cbt-review-card.is-wrong-selected .cbt-review-letter {
            background-color: #e11d48 !important;
            color: #ffffff !important;
        }
        .cbt-review-card.is-wrong-selected .cbt-review-text {
            color: #881337 !important;
            font-weight: 600 !important;
        }
        .dark .cbt-review-card.is-wrong-selected {
            border-color: #f43f5e !important;
            background-color: #380a15 !important;
        }
        .dark .cbt-review-card.is-wrong-selected .cbt-review-letter {
            background-color: #f43f5e !important;
            color: #ffffff !important;
        }
        .dark .cbt-review-card.is-wrong-selected .cbt-review-text {
            color: #fff1f2 !important;
            font-weight: 600 !important;
        }

        /* 3. KUNCI JAWABAN BENAR (Correct Key, not selected by student) */
        .cbt-review-card.is-correct-key {
            border-color: #10b981 !important;
            border-style: dashed !important;
            background-color: #f0fdf4 !important;
        }
        .cbt-review-card.is-correct-key .cbt-review-letter {
            border: 2px solid #10b981 !important;
            background-color: #d1fae5 !important;
            color: #065f46 !important;
        }
        .cbt-review-card.is-correct-key .cbt-review-text {
            color: #064e3b !important;
            font-weight: 600 !important;
        }
        .dark .cbt-review-card.is-correct-key {
            border-color: #34d399 !important;
            border-style: dashed !important;
            background-color: #063124 !important;
        }
        .dark .cbt-review-card.is-correct-key .cbt-review-letter {
            border: 2px solid #34d399 !important;
            background-color: #047857 !important;
            color: #ffffff !important;
        }
        .dark .cbt-review-card.is-correct-key .cbt-review-text {
            color: #ffffff !important;
            font-weight: 600 !important;
        }

        /* 4. OPSI NETRAL LAINNYA */
        .cbt-review-card.is-neutral {
            border-color: #e5e7eb !important;
            background-color: #ffffff !important;
        }
        .cbt-review-card.is-neutral .cbt-review-letter {
            background-color: #f3f4f6 !important;
            border: 1px solid #e5e7eb !important;
            color: #4b5563 !important;
        }
        .cbt-review-card.is-neutral .cbt-review-text {
            color: #374151 !important;
        }
        .dark .cbt-review-card.is-neutral {
            border-color: #1f2937 !important;
            background-color: #111827 !important;
        }
        .dark .cbt-review-card.is-neutral .cbt-review-letter {
            background-color: #1f2937 !important;
            border: 1px solid #374151 !important;
            color: #9ca3af !important;
        }
        .dark .cbt-review-card.is-neutral .cbt-review-text {
            color: #e5e7eb !important;
        }
    </style>

    <div class="cbt-exam-wrapper">
    <div class="cbt-exam-page rounded-2xl p-4 sm:p-6">

    @if (is_null($subjectId))
        {{-- ============================================ --}}
        {{-- TAHAP 1: PILIH MATA PELAJARAN --}}
        {{-- ============================================ --}}
        <div class="mx-auto max-w-5xl space-y-6">
            <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-800 dark:bg-gray-900 sm:p-8">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-sky-100 text-sky-700 dark:bg-sky-900/60 dark:text-sky-300">
                            <svg width="24" height="24" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Langkah 1 dari 2</p>
                            <h2 class="text-xl font-bold text-gray-900 dark:text-gray-50">{{ $examRecord?->title ?? 'Ujian CBT' }}</h2>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Pilih satu mata pelajaran untuk dikerjakan. Setiap mapel hanya dapat dikerjakan <strong>1 kali</strong>.</p>
                        </div>
                    </div>
                    <a href="{{ \App\Filament\Test\Resources\Exams\ExamResource::getUrl('index') }}"
                       class="inline-flex items-center justify-center rounded-xl border border-gray-300 px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-100 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800">
                        Kembali
                    </a>
                </div>

                <div class="mt-4 flex flex-wrap items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                    <span class="inline-flex items-center gap-1.5 rounded-lg bg-gray-100 px-2.5 py-1 font-medium text-gray-600 dark:bg-gray-800 dark:text-gray-300">
                        Durasi: {{ $examRecord?->duration ?? '-' }} menit per mapel
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-lg bg-gray-100 px-2.5 py-1 font-medium text-gray-600 dark:bg-gray-800 dark:text-gray-300">
                        KKM: {{ $examRecord?->threshold ?? '-' }}
                    </span>
                    @if ($examClosedForNew)
                        <span class="inline-flex items-center gap-1.5 rounded-lg bg-rose-100 px-2.5 py-1 font-bold text-rose-700 dark:bg-rose-900/60 dark:text-rose-300">
                            Periode ujian telah berakhir — mapel baru tidak dapat dimulai
                        </span>
                    @endif
                </div>
            </div>

            @if (empty($availableSubjects))
                <div class="rounded-2xl border border-amber-300 bg-amber-50 p-6 text-sm text-amber-800 dark:border-amber-800 dark:bg-amber-950/50 dark:text-amber-200">
                    Belum ada mata pelajaran dengan jumlah soal yang valid pada ujian ini. Hubungi guru/admin.
                </div>
            @else
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($availableSubjects as $subj)
                        @php
                            $isDone = $subj['status'] === 'selesai';
                            $isOngoing = $subj['status'] === 'sedang';
                            $isLocked = $examClosedForNew && ! $isDone && ! $isOngoing;
                        @endphp
                        <div class="flex flex-col justify-between rounded-2xl border border-gray-200 bg-white p-5 shadow-sm transition dark:border-gray-800 dark:bg-gray-900">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between gap-2">
                                    @if ($isDone)
                                        <span class="inline-flex items-center gap-1 rounded-lg bg-emerald-100 px-2.5 py-1 text-xs font-bold text-emerald-700 dark:bg-emerald-900/60 dark:text-emerald-300">Selesai</span>
                                    @elseif ($isOngoing)
                                        <span class="inline-flex items-center gap-1 rounded-lg bg-amber-100 px-2.5 py-1 text-xs font-bold text-amber-700 dark:bg-amber-900/60 dark:text-amber-300">Sedang dikerjakan</span>
                                    @else
                                        <span class="inline-flex items-center gap-1 rounded-lg bg-sky-100 px-2.5 py-1 text-xs font-bold text-sky-700 dark:bg-sky-900/60 dark:text-sky-300">Belum dikerjakan</span>
                                    @endif
                                    <span class="text-xs font-medium text-gray-400 dark:text-gray-500">{{ $subj['qty'] }} soal</span>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-50">{{ $subj['name'] }}</h3>
                                <p class="text-xs text-gray-500 dark:text-gray-400">
                                    @if ($isDone)
                                        Kesempatan Anda untuk mapel ini sudah terpakai. Lihat hasil lengkap di menu Riwayat Ujian.
                                    @elseif ($isOngoing)
                                        Sesi Anda masih berjalan. Lanjutkan pengerjaan sebelum waktu habis.
                                    @else
                                        Sekali dimulai, timer berjalan dan tidak bisa diulang.
                                    @endif
                                </p>
                            </div>
                            @if ($isDone)
                                <div class="mt-4 space-y-2">
                                    <button type="button" disabled
                                        class="inline-flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-xl bg-gray-200 px-4 py-2.5 text-sm font-semibold text-gray-500 dark:bg-gray-800 dark:text-gray-400">
                                        <span>Sudah Selesai</span>
                                    </button>
                                    <a href="{{ \App\Filament\Test\Resources\ExamHistories\ExamHistoryResource::getUrl('index') }}"
                                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-700 dark:bg-emerald-600 dark:hover:bg-emerald-500">
                                        <span>Lihat di Riwayat</span>
                                    </a>
                                </div>
                            @else
                            <button type="button"
                                    wire:click="chooseSubject({{ $subj['id'] }})"
                                    @disabled($isLocked)
                                    class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition disabled:cursor-not-allowed disabled:opacity-40
                                    {{ $isOngoing ? 'bg-amber-500 hover:bg-amber-600 dark:bg-amber-600 dark:hover:bg-amber-500' : 'bg-sky-600 hover:bg-sky-700 dark:bg-sky-600 dark:hover:bg-sky-500' }}">
                                @if ($isOngoing)
                                    <span>Lanjutkan Mengerjakan</span>
                                @elseif ($isLocked)
                                    <span>Periode Berakhir</span>
                                @else
                                    <span>Mulai {{ $subj['name'] }}</span>
                                @endif
                            </button>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    @elseif ($isFinished)
        {{-- ============================================ --}}
        {{-- TAHAP 3: HASIL UJIAN PER MAPEL --}}
        {{-- ============================================ --}}
        <div class="mx-auto max-w-4xl space-y-5">
            <div class="flex items-center justify-between gap-3 rounded-2xl border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                <div class="flex items-center gap-3">
                    <button type="button" wire:click="backToSubjects"
                            class="inline-flex items-center gap-1.5 rounded-xl border border-gray-300 px-3 py-2 text-xs font-semibold text-gray-700 transition hover:bg-gray-100 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800">
                        <svg width="16" height="16" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        <span>Semua Mapel</span>
                    </button>
                    <div class="text-sm">
                        <p class="font-bold text-gray-900 dark:text-gray-50">{{ $resultData['exam_title'] ?? 'Ujian' }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Mapel: <strong class="text-gray-700 dark:text-gray-200">{{ $resultData['subject_name'] ?? '-' }}</strong></p>
                    </div>
                </div>
                <span class="rounded-lg bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-500 dark:bg-gray-800 dark:text-gray-400">1x kesempatan per mapel</span>
            </div>

            {{-- Banner status kelulusan: solid, tanpa gradient --}}
            <div @class([
                'rounded-2xl p-6 shadow-sm border sm:p-8',
                'bg-emerald-600 border-emerald-700 text-white dark:bg-emerald-900 dark:border-emerald-800' => $resultData['is_passed'],
                'bg-rose-600 border-rose-700 text-white dark:bg-rose-950 dark:border-rose-900' => !$resultData['is_passed'],
            ])>
                <div class="flex flex-col items-center justify-between gap-6 text-center md:flex-row md:text-left">
                    <div class="space-y-2">
                        <div class="inline-flex items-center gap-2 rounded-full bg-black/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider">
                            @if ($resultData['is_passed'])
                                <svg width="16" height="16" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span>Hasil Evaluasi Ujian</span>
                            @else
                                <svg width="16" height="16" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                <span>Hasil Evaluasi Ujian</span>
                            @endif
                        </div>
                        <h2 class="text-2xl font-extrabold tracking-tight sm:text-3xl">
                            @if ($resultData['is_passed'])
                                SELAMAT, ANDA LULUS!
                            @else
                                MOHON MAAF, ANDA BELUM LULUS
                            @endif
                        </h2>
                        <p class="max-w-lg text-sm opacity-90">
                            @if ($resultData['is_passed'])
                                Skor Anda melampaui standar kelulusan minimum (KKM: {{ $resultData['threshold'] }}).
                            @else
                                Skor Anda belum mencapai batas minimum kelulusan (KKM: {{ $resultData['threshold'] }}). Tetap semangat!
                            @endif
                        </p>
                        @if ($resultData['status'] === 'terminated_cheat')
                            <div class="mt-2 inline-flex items-center gap-1.5 rounded-lg bg-black/25 px-3 py-1 text-xs font-medium">
                                <span>Ujian dihentikan paksa karena melebihi toleransi keluar tab ujian.</span>
                            </div>
                        @elseif ($resultData['status'] === 'timeout_auto_submit')
                            <div class="mt-2 inline-flex items-center gap-1.5 rounded-lg bg-black/20 px-3 py-1 text-xs font-medium">
                                <span>Ujian otomatis diserahkan karena waktu pengerjaan telah habis.</span>
                            </div>
                        @endif
                    </div>

                    <div class="flex min-w-[160px] flex-col items-center justify-center rounded-2xl border border-white/25 bg-black/20 p-6">
                        <span class="text-xs font-medium uppercase tracking-wider opacity-80">Skor Akhir</span>
                        <div class="my-1 text-5xl font-black tracking-tight">
                            {{ $resultData['score'] }}
                        </div>
                        <span class="text-xs opacity-75">KKM: {{ $resultData['threshold'] }}</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                <div class="flex flex-col justify-between rounded-2xl border border-gray-200 bg-white p-5 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">Total Soal</span>
                    <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-gray-50">{{ $resultData['total_questions'] }}</div>
                    <span class="mt-1 text-xs text-gray-500 dark:text-gray-400">Soal diujikan</span>
                </div>
                <div class="flex flex-col justify-between rounded-2xl border border-gray-200 bg-white p-5 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                    <span class="text-xs font-semibold uppercase tracking-wider text-emerald-600 dark:text-emerald-400">Jawaban Benar</span>
                    <div class="mt-2 text-3xl font-bold text-emerald-600 dark:text-emerald-400">{{ $resultData['correct_count'] }}</div>
                    <span class="mt-1 text-xs text-gray-500 dark:text-gray-400">Butir tepat</span>
                </div>
                <div class="flex flex-col justify-between rounded-2xl border border-gray-200 bg-white p-5 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                    <span class="text-xs font-semibold uppercase tracking-wider text-rose-600 dark:text-rose-400">Jawaban Salah</span>
                    <div class="mt-2 text-3xl font-bold text-rose-600 dark:text-rose-400">{{ $resultData['wrong_count'] }}</div>
                    <span class="mt-1 text-xs text-gray-500 dark:text-gray-400">Butir keliru</span>
                </div>
                <div class="flex flex-col justify-between rounded-2xl border border-gray-200 bg-white p-5 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                    <span class="text-xs font-semibold uppercase tracking-wider text-amber-600 dark:text-amber-400">Tidak Dijawab</span>
                    <div class="mt-2 text-3xl font-bold text-amber-600 dark:text-amber-400">{{ $resultData['unanswered_count'] }}</div>
                    <span class="mt-1 text-xs text-gray-500 dark:text-gray-400">Kosong</span>
                </div>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                <h3 class="mb-4 flex items-center gap-2 text-base font-bold text-gray-900 dark:text-gray-50">
                    <svg width="20" height="20" class="w-5 h-5 text-sky-600 dark:text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Informasi Pengerjaan Ujian
                </h3>
                <dl class="grid grid-cols-1 gap-4 text-sm md:grid-cols-3">
                    <div class="rounded-xl bg-gray-100 p-3 dark:bg-gray-800">
                        <dt class="text-xs font-medium text-gray-400">Waktu Mulai</dt>
                        <dd class="mt-0.5 text-sm font-semibold text-gray-700 dark:text-gray-200">{{ $resultData['started_at'] ?? '-' }}</dd>
                    </div>
                    <div class="rounded-xl bg-gray-100 p-3 dark:bg-gray-800">
                        <dt class="text-xs font-medium text-gray-400">Waktu Selesai</dt>
                        <dd class="mt-0.5 text-sm font-semibold text-gray-700 dark:text-gray-200">{{ $resultData['finished_at'] ?? '-' }}</dd>
                    </div>
                    <div class="rounded-xl bg-gray-100 p-3 dark:bg-gray-800">
                        <dt class="text-xs font-medium text-gray-400">Durasi Pengerjaan</dt>
                        <dd class="mt-0.5 text-sm font-semibold text-gray-700 dark:text-gray-200">{{ $resultData['duration_formatted'] ?? '-' }}</dd>
                    </div>
                </dl>
            </div>

            {{-- ============================================ --}}
            {{-- BAGIAN: REVIEW & PEMBAHASAN JAWABAN          --}}
            {{-- ============================================ --}}
            @if (!empty($reviewQuestions))
                @php
                    $filteredQuestions = collect($reviewQuestions);
                    if ($reviewFilter === 'correct') {
                        $filteredQuestions = $filteredQuestions->where('status', 'correct');
                    } elseif ($reviewFilter === 'wrong') {
                        $filteredQuestions = $filteredQuestions->where('status', 'wrong');
                    } elseif ($reviewFilter === 'unanswered') {
                        $filteredQuestions = $filteredQuestions->where('status', 'unanswered');
                    }
                @endphp

                <div class="space-y-4 pt-2">
                    {{-- Header Review & Filter Tab --}}
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm dark:border-gray-800 dark:bg-gray-900 sm:p-6">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between border-b border-gray-100 pb-4 dark:border-gray-800">
                            <div>
                                <h3 class="flex items-center gap-2 text-lg font-bold text-gray-900 dark:text-gray-50">
                                    <svg width="22" height="22" class="w-5.5 h-5.5 text-sky-600 dark:text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    Review & Pembahasan Jawaban
                                </h3>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Periksa rincian pilihan jawaban Anda, kunci jawaban yang tepat, dan pembahasan setiap butir soal.</p>
                            </div>

                            {{-- Filter Pills --}}
                            <div class="flex flex-wrap items-center gap-1.5 text-xs font-semibold">
                                <button type="button" wire:click="setReviewFilter('all')"
                                    @class([
                                        'rounded-xl px-3 py-1.5 transition',
                                        'bg-sky-600 text-white shadow-sm dark:bg-sky-500' => $reviewFilter === 'all',
                                        'bg-gray-100 text-gray-600 hover:bg-gray-200 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700' => $reviewFilter !== 'all',
                                    ])>
                                    Semua ({{ count($reviewQuestions) }})
                                </button>
                                <button type="button" wire:click="setReviewFilter('correct')"
                                    @class([
                                        'flex items-center gap-1 rounded-xl px-3 py-1.5 transition',
                                        'bg-emerald-600 text-white shadow-sm dark:bg-emerald-600' => $reviewFilter === 'correct',
                                        'bg-emerald-50 text-emerald-700 hover:bg-emerald-100 dark:bg-emerald-950/40 dark:text-emerald-300 dark:hover:bg-emerald-900/60' => $reviewFilter !== 'correct',
                                    ])>
                                    <span class="inline-block h-2 w-2 rounded-full bg-emerald-500"></span>
                                    <span>Benar ({{ $resultData['correct_count'] ?? 0 }})</span>
                                </button>
                                <button type="button" wire:click="setReviewFilter('wrong')"
                                    @class([
                                        'flex items-center gap-1 rounded-xl px-3 py-1.5 transition',
                                        'bg-rose-600 text-white shadow-sm dark:bg-rose-600' => $reviewFilter === 'wrong',
                                        'bg-rose-50 text-rose-700 hover:bg-rose-100 dark:bg-rose-950/40 dark:text-rose-300 dark:hover:bg-rose-900/60' => $reviewFilter !== 'wrong',
                                    ])>
                                    <span class="inline-block h-2 w-2 rounded-full bg-rose-500"></span>
                                    <span>Salah ({{ $resultData['wrong_count'] ?? 0 }})</span>
                                </button>
                                <button type="button" wire:click="setReviewFilter('unanswered')"
                                    @class([
                                        'flex items-center gap-1 rounded-xl px-3 py-1.5 transition',
                                        'bg-amber-600 text-white shadow-sm dark:bg-amber-600' => $reviewFilter === 'unanswered',
                                        'bg-amber-50 text-amber-700 hover:bg-amber-100 dark:bg-amber-950/40 dark:text-amber-300 dark:hover:bg-amber-900/60' => $reviewFilter !== 'unanswered',
                                    ])>
                                    <span class="inline-block h-2 w-2 rounded-full bg-amber-500"></span>
                                    <span>Kosong ({{ $resultData['unanswered_count'] ?? 0 }})</span>
                                </button>
                            </div>
                        </div>

                        {{-- Navigasi Kisi Nomor Soal (Quick Jump) --}}
                        <div class="mt-4">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500 block mb-2">Navigasi Nomor Soal:</span>
                            <div class="flex flex-wrap gap-2 max-h-36 overflow-y-auto pr-1">
                                @foreach ($reviewQuestions as $rq)
                                    @php
                                        $numClass = match ($rq['status']) {
                                            'correct' => 'bg-emerald-500 text-white hover:bg-emerald-600 dark:bg-emerald-600 dark:hover:bg-emerald-500',
                                            'wrong' => 'bg-rose-500 text-white hover:bg-rose-600 dark:bg-rose-600 dark:hover:bg-rose-500',
                                            default => 'bg-amber-500 text-white hover:bg-amber-600 dark:bg-amber-600 dark:hover:bg-amber-500',
                                        };
                                    @endphp
                                    <button type="button"
                                        onclick="document.getElementById('review-q-{{ $rq['number'] }}')?.scrollIntoView({ behavior: 'smooth', block: 'center' })"
                                        class="h-8 w-8 rounded-lg text-xs font-bold transition flex items-center justify-center {{ $numClass }}"
                                        title="Soal No. {{ $rq['number'] }} ({{ ucfirst($rq['status']) }})">
                                        {{ $rq['number'] }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Daftar Soal & Jawaban --}}
                    @if ($filteredQuestions->isEmpty())
                        <div class="rounded-2xl border border-gray-200 bg-white p-8 text-center text-sm text-gray-500 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-400">
                            Tidak ada butir soal dalam filter ini.
                        </div>
                    @else
                        <div class="space-y-4">
                            @foreach ($filteredQuestions as $qItem)
                                @php
                                    $statusBorder = match ($qItem['status']) {
                                        'correct' => 'border-l-4 border-l-emerald-500 border-gray-200 dark:border-gray-800',
                                        'wrong' => 'border-l-4 border-l-rose-500 border-gray-200 dark:border-gray-800',
                                        default => 'border-l-4 border-l-amber-500 border-gray-200 dark:border-gray-800',
                                    };
                                @endphp
                                <div id="review-q-{{ $qItem['number'] }}"
                                     class="space-y-4 rounded-2xl border bg-white p-6 shadow-sm dark:bg-gray-900 sm:p-7 {{ $statusBorder }}">
                                    
                                    {{-- Baris Status & Nomor --}}
                                    <div class="flex flex-wrap items-center justify-between gap-3 border-b border-gray-100 pb-4 dark:border-gray-800">
                                        <div class="flex items-center gap-2">
                                            <span class="rounded-lg bg-gray-900 px-3 py-1 text-xs font-bold text-white dark:bg-gray-100 dark:text-gray-900">
                                                Soal No. {{ $qItem['number'] }}
                                            </span>
                                            <span class="rounded-lg bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-600 dark:bg-gray-800 dark:text-gray-300">
                                                Bobot: {{ $qItem['max_score'] }} Poin
                                            </span>
                                        </div>

                                        <div>
                                            @if ($qItem['status'] === 'correct')
                                                <span class="inline-flex items-center gap-1.5 rounded-lg bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-700 dark:bg-emerald-950/70 dark:text-emerald-300 border border-emerald-300 dark:border-emerald-800">
                                                    <svg width="14" height="14" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                                    <span>Jawaban Benar (+{{ $qItem['score_earned'] }} Poin)</span>
                                                </span>
                                            @elseif ($qItem['status'] === 'wrong')
                                                <span class="inline-flex items-center gap-1.5 rounded-lg bg-rose-100 px-3 py-1 text-xs font-bold text-rose-700 dark:bg-rose-950/70 dark:text-rose-300 border border-rose-300 dark:border-rose-800">
                                                    <svg width="14" height="14" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                                                    <span>Jawaban Salah (0 Poin)</span>
                                                </span>
                                            @else
                                                <span class="inline-flex items-center gap-1.5 rounded-lg bg-amber-100 px-3 py-1 text-xs font-bold text-amber-700 dark:bg-amber-950/70 dark:text-amber-300 border border-amber-300 dark:border-amber-800">
                                                    <svg width="14" height="14" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"/></svg>
                                                    <span>Tidak Dijawab (0 Poin)</span>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Teks Pertanyaan --}}
                                    <div class="max-w-none text-base leading-relaxed text-gray-900 dark:text-gray-100">
                                        {!! $qItem['payload'] !!}
                                    </div>

                                    {{-- Opsi Jawaban --}}
                                    <div class="space-y-2.5 pt-2">
                                        @foreach ($qItem['answers'] as $aIdx => $opt)
                                            @php
                                                $letter = chr(65 + $aIdx);
                                                $isSelected = $opt['is_selected'];
                                                $isCorrect = $opt['is_correct'];

                                                if ($isSelected && $isCorrect) {
                                                    // Siswa memilih opsi ini DAN opsi ini benar
                                                    $cardState = 'is-correct-selected';
                                                    $tagText = 'Jawaban Anda (Tepat)';
                                                    $tagColor = 'bg-emerald-600 text-white dark:bg-emerald-500 dark:text-emerald-950';
                                                } elseif ($isSelected && ! $isCorrect) {
                                                    // Siswa memilih opsi ini TETAPI salah
                                                    $cardState = 'is-wrong-selected';
                                                    $tagText = 'Jawaban Anda (Keliru)';
                                                    $tagColor = 'bg-rose-600 text-white dark:bg-rose-500 dark:text-rose-950';
                                                } elseif (! $isSelected && $isCorrect) {
                                                    // Opsi ini adalah kunci jawaban yang benar (siswa tidak memilih ini)
                                                    $cardState = 'is-correct-key';
                                                    $tagText = 'Kunci Jawaban Benar';
                                                    $tagColor = 'bg-emerald-600 text-white dark:bg-emerald-400 dark:text-emerald-950';
                                                } else {
                                                    // Opsi netral lainnya
                                                    $cardState = 'is-neutral';
                                                    $tagText = null;
                                                    $tagColor = null;
                                                }
                                            @endphp
                                            <div class="cbt-review-card {{ $cardState }} flex items-start justify-between gap-4 sm:gap-6 rounded-xl p-4 transition shadow-xs">
                                                <div class="flex items-start gap-4 sm:gap-5 flex-1 min-w-0">
                                                    <div class="cbt-review-letter flex h-8 w-8 sm:h-9 sm:w-9 shrink-0 items-center justify-center rounded-lg text-sm font-bold shadow-xs">
                                                        {{ $letter }}
                                                    </div>
                                                    <div class="cbt-review-text flex-1 pt-1 text-sm sm:text-base leading-relaxed break-words font-medium">
                                                        {{ $opt['text'] }}
                                                    </div>
                                                </div>

                                                @if ($tagText)
                                                    <span class="shrink-0 inline-flex items-center gap-1.5 rounded-lg px-3 py-1.5 text-xs font-bold shadow-xs {{ $tagColor }}">
                                                        @if ($isCorrect)
                                                            <svg width="14" height="14" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                                        @else
                                                            <svg width="14" height="14" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                                                        @endif
                                                        <span>{{ $tagText }}</span>
                                                    </span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>

                                    {{-- Penjelasan / Pembahasan Soal jika ada --}}
                                    @if (!empty($qItem['description']))
                                        <div class="mt-4 rounded-xl border border-sky-200 bg-sky-50/70 p-4 text-sm text-sky-950 dark:border-sky-900/60 dark:bg-sky-950/30 dark:text-sky-200">
                                            <div class="flex items-center gap-2 font-bold text-sky-800 dark:text-sky-300 mb-1">
                                                <svg width="18" height="18" class="w-4.5 h-4.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                                <span>Pembahasan & Penjelasan:</span>
                                            </div>
                                            <div class="pl-6.5 text-xs sm:text-sm leading-relaxed opacity-95">
                                                {!! nl2br(e($qItem['description'])) !!}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif

            {{-- Tombol Aksi Bawah --}}
            <div class="flex flex-col items-center justify-end gap-3 pt-4 sm:flex-row border-t border-gray-200 dark:border-gray-800">
                <button type="button" wire:click="backToSubjects"
                        class="inline-flex w-full items-center justify-center rounded-xl bg-sky-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-sky-700 sm:w-auto dark:bg-sky-600 dark:hover:bg-sky-500">
                    Kerjakan Mapel Lain
                </button>
                <a href="{{ \App\Filament\Test\Resources\ExamHistories\ExamHistoryResource::getUrl('index') }}"
                   class="inline-flex w-full items-center justify-center rounded-xl border border-gray-300 bg-white px-6 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-100 sm:w-auto dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-gray-800">
                    Kembali ke Riwayat Ujian
                </a>
            </div>
        </div>

    @else
        {{-- ============================================ --}}
        {{-- TAHAP 2: LEMBAR UJIAN PER MAPEL --}}
        {{-- ============================================ --}}
        <div x-data="{
            targetEnd: {{ $targetEndTimestamp }},
            now: Date.now(),
            hours: '00',
            minutes: '00',
            seconds: '00',
            progress: 0,
            isWarningShow: false,
            warningCount: {{ (int) ($violationCount ?? 0) }},
            remainingTolerance: {{ max(0, 3 - (int) ($violationCount ?? 0)) }},
            showConfirmModal: false,
            lastBlurTime: 0,
            hasAutoSubmitted: false,

            init() {
                this.updateTimer();
                setInterval(() => {
                    this.now = Date.now();
                    this.updateTimer();
                }, 1000);

                // Satu pelanggaran = satu kali pindah tab / keluar layar.
                // blur + visibilitychange sering menembak bersamaan untuk 1 aksi,
                // jadi pakai debounce agar tidak terhitung ganda.
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden) { this.handleCheatAttempt(); }
                });
                window.addEventListener('blur', () => { this.handleCheatAttempt(); });
                document.addEventListener('pagehide', () => { this.handleCheatAttempt(); });

                const applyWarning = (count, remaining) => {
                    this.warningCount = parseInt(count ?? 0);
                    this.remainingTolerance = parseInt(remaining ?? Math.max(0, 3 - this.warningCount));
                    // Pelanggaran 1 & 2 tampilkan warning, ke-3 server paksa selesai.
                    if (this.warningCount > 0 && this.warningCount < 3) {
                        this.isWarningShow = true;
                    }
                };

                // Livewire v3 dispatch bisa tertangkap via Livewire.on maupun window event.
                if (window.Livewire) {
                    try {
                        Livewire.on('show-cheat-warning', (params) => {
                            const p = Array.isArray(params) ? (params[0] ?? params) : (params?.[0] ?? params);
                            applyWarning(p?.count, p?.remaining);
                        });
                    } catch (e) {}
                }
                window.addEventListener('show-cheat-warning', (event) => {
                    const d = event?.detail ?? {};
                    const p = Array.isArray(d) ? (d[0] ?? {}) : d;
                    if (p?.count !== undefined) { applyWarning(p.count, p.remaining); }
                });
            },
            handleCheatAttempt() {
                if (this.hasAutoSubmitted) { return; }
                const currentTime = Date.now();
                if (currentTime - this.lastBlurTime > 2500) {
                    this.lastBlurTime = currentTime;
                    $wire.recordViolation();
                }
            },
            updateTimer() {
                const diff = this.targetEnd - this.now;
                if (diff <= 0) {
                    this.hours = '00'; this.minutes = '00'; this.seconds = '00';
                    if (! this.hasAutoSubmitted) {
                        this.hasAutoSubmitted = true;
                        $wire.submitExam(true);
                    }
                    return;
                }
                const totalSec = Math.floor(diff / 1000);
                this.hours = String(Math.floor(totalSec / 3600)).padStart(2, '0');
                this.minutes = String(Math.floor((totalSec % 3600) / 60)).padStart(2, '0');
                this.seconds = String(totalSec % 60).padStart(2, '0');
            },
            isUrgent() { return (this.targetEnd - this.now) <= (5 * 60 * 1000); },
            isWarning() {
                const diff = this.targetEnd - this.now;
                return diff > (5 * 60 * 1000) && diff <= (10 * 60 * 1000);
            }
        }" class="mx-auto max-w-7xl space-y-5">

            {{-- Header sticky: selalu di atas card lain saat scroll, tepat di bawah topbar Filament --}}
            <div class="cbt-sticky-header rounded-2xl border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div class="flex min-w-0 items-center gap-3">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-sky-100 text-sky-700 dark:bg-gray-800 dark:text-gray-200">
                            <svg width="24" height="24" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <div class="min-w-0">
                            <h2 class="truncate text-base font-bold text-gray-900 dark:text-gray-50">{{ $examRecord?->title ?? 'Ujian CBT' }}</h2>
                            <div class="flex flex-wrap items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                                <span class="inline-flex items-center rounded-lg bg-sky-100 px-2 py-0.5 font-semibold text-sky-700 dark:bg-gray-800 dark:text-gray-200">{{ $subjectRecord?->name ?? ($questions[0]['subject_name'] ?? 'Mapel') }}</span>
                                <span>Terjawab: <strong class="text-sky-700 dark:text-sky-300">{{ $this->answered_count }}</strong> / {{ count($questions) }}</span>
                                <span>Ragu-ragu: <strong class="text-amber-600 dark:text-amber-400">{{ $this->doubtful_count }}</strong></span>
                            </div>
                        </div>
                    </div>

                    <div class="ml-auto flex items-center gap-2 sm:gap-3">
                        <div :class="{
                            'bg-rose-600 text-white dark:bg-rose-700': isUrgent(),
                            'bg-amber-500 text-white dark:bg-amber-600': !isUrgent() && isWarning(),
                            'bg-gray-100 text-gray-800 border border-gray-300 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-700': !isUrgent() && !isWarning()
                        }" class="flex items-center gap-2 rounded-xl px-4 py-2 font-mono text-sm font-bold shadow-sm transition sm:text-base">
                            <svg width="20" height="20" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span x-text="`${hours}:${minutes}:${seconds}`">00:00:00</span>
                        </div>
                        <button type="button" @click="showConfirmModal = true"
                                class="flex items-center gap-1.5 rounded-xl bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-700 dark:bg-emerald-600 dark:hover:bg-emerald-500">
                            <svg width="16" height="16" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="hidden sm:inline">Selesai</span>
                        </button>
                    </div>
                </div>

                {{-- Progress bar solid --}}
                @php $pct = count($questions) > 0 ? round(($this->answered_count / count($questions)) * 100) : 0; @endphp
                <div class="mt-3 h-2 overflow-hidden rounded-full bg-gray-200 dark:bg-gray-800">
                    <div class="h-full rounded-full bg-sky-600 transition-all dark:bg-sky-500" style="width: {{ $pct }}%"></div>
                </div>
                <p class="mt-1.5 text-xs text-gray-500 dark:text-gray-400">Progres pengerjaan: {{ $pct }}%</p>
            </div>

            @if ($isTimeTruncated)
                <div class="relative z-0 flex items-center gap-3 rounded-2xl border border-amber-300 bg-amber-50 p-4 text-sm text-amber-800 shadow-sm dark:border-amber-800 dark:bg-amber-950/50 dark:text-amber-200">
                    <svg width="20" height="20" class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    <span><strong>Pemberitahuan Waktu:</strong> {{ $truncatedReason }}</span>
                </div>
            @endif

            @if (!empty($questions) && isset($questions[$currentIndex]))
                @php
                    $currentQ = $questions[$currentIndex];
                    $currentQId = $currentQ['id'];
                    $selectedAns = $answers[$currentQId] ?? null;
                    $isCurrentDoubtful = $doubtfuls[$currentQId] ?? false;
                @endphp

                <div class="relative z-0 grid grid-cols-1 gap-5 lg:grid-cols-4">
                    <div class="space-y-4 lg:col-span-3">
                        <div class="space-y-6 rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-800 dark:bg-gray-900 sm:p-8">
                            <div class="flex items-center justify-between border-b border-gray-200 pb-4 dark:border-gray-800">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="rounded-lg bg-gray-900 px-3 py-1 text-xs font-bold text-white dark:bg-gray-100 dark:text-gray-900">
                                        Soal {{ $currentIndex + 1 }} dari {{ count($questions) }}
                                    </span>
                                    <span class="rounded-lg bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-600 dark:bg-gray-800 dark:text-gray-300">
                                        {{ $currentQ['subject_name'] }}
                                    </span>
                                </div>
                                @if ($isCurrentDoubtful)
                                    <span class="flex items-center gap-1 rounded-lg bg-amber-100 px-2.5 py-1 text-xs font-semibold text-amber-700 dark:bg-amber-900/60 dark:text-amber-300">
                                        Ragu-ragu
                                    </span>
                                @endif
                            </div>

                            <div class="max-w-none text-base leading-relaxed text-gray-900 dark:text-gray-100">
                                {!! $currentQ['payload'] !!}
                            </div>

                            <div class="space-y-3 pt-2">
                                @foreach ($currentQ['answers'] as $index => $answer)
                                    @php
                                        $letter = chr(65 + $index);
                                        $isSelected = ($selectedAns == $answer['id']);
                                    @endphp
                                     <div wire:click="saveAnswer({{ $currentQId }}, {{ $answer['id'] }})"
                                         @class([
                                             'cbt-answer-card group flex cursor-pointer select-none items-start gap-4 rounded-xl p-4',
                                             'is-selected' => $isSelected,
                                         ])>
                                        <div @class([
                                            'flex h-8 w-8 shrink-0 items-center justify-center rounded-lg text-sm font-bold transition',
                                            'bg-sky-600 text-white dark:bg-sky-500' => $isSelected,
                                            'bg-gray-200 text-gray-700 group-hover:bg-sky-100 group-hover:text-sky-700 dark:bg-gray-800 dark:text-gray-300 dark:group-hover:bg-gray-700 dark:group-hover:text-gray-100' => !$isSelected,
                                        ])>
                                            {{ $letter }}
                                        </div>
                                        <div class="cbt-answer-text flex-1 pt-1 text-sm font-medium sm:text-base">
                                            {{ $answer['text'] }}
                                        </div>
                                        @if ($isSelected)
                                            <svg width="20" height="20" class="w-5 h-5 mt-1 shrink-0 text-sky-600 dark:text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                        @endif
                                    </div>
                                @endforeach
                            </div>

                            <div class="flex flex-wrap items-center justify-between gap-3 border-t border-gray-200 pt-4 dark:border-gray-800">
                                <button type="button" wire:click="prevQuestion" @disabled($currentIndex === 0)
                                        class="flex items-center gap-1.5 rounded-xl border border-gray-300 px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:opacity-40 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800">
                                    <svg width="16" height="16" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                                    <span>Sebelumnya</span>
                                </button>
                                <button type="button" wire:click="toggleDoubtful({{ $currentQId }})"
                                        @class([
                                            'flex items-center gap-1.5 rounded-xl px-4 py-2.5 text-sm font-semibold transition',
                                            'bg-amber-500 text-white hover:bg-amber-600 dark:bg-amber-600 dark:hover:bg-amber-500' => $isCurrentDoubtful,
                                            'border border-amber-400 bg-amber-50 text-amber-700 hover:bg-amber-100 dark:border-amber-700 dark:bg-amber-950/40 dark:text-amber-300 dark:hover:bg-amber-900/60' => !$isCurrentDoubtful,
                                        ])>
                                    <svg width="16" height="16" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                    <span>{{ $isCurrentDoubtful ? 'Batal Ragu-ragu' : 'Ragu-ragu' }}</span>
                                </button>
                                @if ($currentIndex < count($questions) - 1)
                                    <button type="button" wire:click="nextQuestion"
                                            class="flex items-center gap-1.5 rounded-xl bg-sky-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-sky-700 dark:bg-sky-600 dark:hover:bg-sky-500">
                                        <span>Selanjutnya</span>
                                        <svg width="16" height="16" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </button>
                                @else
                                    <button type="button" @click="showConfirmModal = true"
                                            class="flex items-center gap-1.5 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-700 dark:bg-emerald-600 dark:hover:bg-emerald-500">
                                        <span>Selesai Ujian</span>
                                        <svg width="16" height="16" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 lg:col-span-1">
                        <div class="space-y-4 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                            <h3 class="flex items-center justify-between text-sm font-bold text-gray-900 dark:text-gray-50">
                                <span>Navigasi Soal</span>
                                <span class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ count($questions) }} butir</span>
                            </h3>
                            <div class="grid grid-cols-5 gap-2">
                                @foreach ($questions as $idx => $qItem)
                                    @php
                                        $qId = $qItem['id'];
                                        $isAns = !empty($answers[$qId]);
                                        $isDoubt = !empty($doubtfuls[$qId]);
                                        $isActive = ($currentIndex === $idx);
                                    @endphp
                                    <button type="button" wire:click="selectQuestion({{ $idx }})"
                                            @class([
                                                'relative flex aspect-square w-full cursor-pointer items-center justify-center rounded-xl text-xs font-bold transition',
                                                'ring-2 ring-sky-600 ring-offset-2 dark:ring-sky-500 dark:ring-offset-gray-900' => $isActive,
                                                'bg-amber-500 text-white hover:bg-amber-600 dark:bg-amber-600' => $isDoubt,
                                                'bg-emerald-600 text-white hover:bg-emerald-700 dark:bg-emerald-600' => !$isDoubt && $isAns,
                                                'bg-gray-200 text-gray-700 hover:bg-gray-300 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700' => !$isDoubt && !$isAns,
                                            ])>
                                        {{ $idx + 1 }}
                                    </button>
                                @endforeach
                            </div>
                            <div class="space-y-2 border-t border-gray-200 pt-3 text-xs text-gray-600 dark:border-gray-800 dark:text-gray-300">
                                <div class="flex items-center gap-2"><div class="h-3 w-3 rounded-md bg-emerald-600"></div><span>Sudah dijawab</span></div>
                                <div class="flex items-center gap-2"><div class="h-3 w-3 rounded-md bg-amber-500"></div><span>Ragu-ragu</span></div>
                                <div class="flex items-center gap-2"><div class="h-3 w-3 rounded-md bg-gray-300 dark:bg-gray-700"></div><span>Belum dijawab</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div x-show="isWarningShow" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 p-4">
                <div class="w-full max-w-md space-y-4 rounded-2xl border-2 border-rose-600 bg-white p-6 shadow-xl dark:border-rose-700 dark:bg-gray-900">
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-rose-100 text-rose-600 dark:bg-rose-900/60 dark:text-rose-300">
                        <svg width="28" height="28" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <div class="space-y-1 text-center">
                        <h3 class="text-lg font-extrabold text-rose-600 dark:text-rose-400">PERINGATAN PELANGGARAN (<span x-text="warningCount"></span>/3)</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Anda terdeteksi keluar dari layar atau berpindah tab ujian (pelanggaran ke-<span x-text="warningCount"></span> dari 3).</p>
                        <p class="mt-2 text-xs font-semibold text-rose-600 dark:text-rose-400">Peringatan 1 &amp; 2 = toleransi. Pelanggaran ke-3 = ujian <strong>SELESAI PAKSA</strong>. Sisa: <span x-text="remainingTolerance"></span> kali.</p>
                    </div>
                    <button type="button" @click="isWarningShow = false"
                            class="w-full rounded-xl bg-rose-600 px-4 py-2.5 text-sm font-bold text-white shadow-sm transition hover:bg-rose-700 dark:bg-rose-700 dark:hover:bg-rose-600">
                        Saya Mengerti & Kembali Mengerjakan
                    </button>
                </div>
            </div>

            <div x-show="showConfirmModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 p-4">
                <div class="w-full max-w-md space-y-5 rounded-2xl border border-gray-200 bg-white p-6 shadow-xl dark:border-gray-800 dark:bg-gray-900">
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 dark:bg-emerald-900/60 dark:text-emerald-300">
                        <svg width="28" height="28" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div class="space-y-2 text-center">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-gray-50">Selesaikan {{ $subjectRecord?->name ?? 'Ujian' }}?</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Periksa kembali jawaban sebelum mengakhiri. Keputusan tidak dapat dibatalkan (1x kesempatan).</p>
                        <div class="grid grid-cols-3 gap-2 rounded-xl bg-gray-100 p-3 text-center text-xs dark:bg-gray-800">
                            <div><span class="text-gray-500 dark:text-gray-400">Terjawab</span><div class="text-base font-bold text-emerald-600 dark:text-emerald-400">{{ $this->answered_count }}</div></div>
                            <div><span class="text-gray-500 dark:text-gray-400">Ragu-ragu</span><div class="text-base font-bold text-amber-600 dark:text-amber-400">{{ $this->doubtful_count }}</div></div>
                            <div><span class="text-gray-500 dark:text-gray-400">Kosong</span><div class="text-base font-bold text-rose-600 dark:text-rose-400">{{ count($questions) - $this->answered_count }}</div></div>
                        </div>
                        @if ((count($questions) - $this->answered_count) > 0 || $this->doubtful_count > 0)
                            <p class="text-xs font-medium text-amber-600 dark:text-amber-400">Masih ada soal kosong atau ragu-ragu.</p>
                        @endif
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <button type="button" @click="showConfirmModal = false"
                                class="w-1/2 rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-gray-800">
                            Periksa Lagi
                        </button>
                        <button type="button" wire:click="submitExam" @click="showConfirmModal = false"
                                class="w-1/2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-bold text-white shadow-sm transition hover:bg-emerald-700 dark:bg-emerald-600 dark:hover:bg-emerald-500">
                            Ya, Selesaikan
                        </button>
                    </div>
                </div>
            </div>

        </div>
    @endif

    </div>
    </div>
</x-filament-panels::page>
