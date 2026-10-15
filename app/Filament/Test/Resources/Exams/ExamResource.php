<?php

namespace App\Filament\Test\Resources\Exams;

use App\Filament\Test\Resources\Exams\Pages\ManageExams;
use App\Filament\Test\Resources\Exams\Pages\StartingExam;
use App\Models\Exam;
use App\Models\ExamHistory;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamResource extends Resource
{
    protected static ?string $model = Exam::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPencilSquare;

    protected static ?string $recordTitleAttribute = 'title';

    /** Ringkasan progres per mapel untuk satu ujian. */
    public static function subjectProgress(Exam $exam, ?int $studentId): array
    {
        $exam->loadMissing('subjects');

        $subjects = $exam->subjects->filter(fn ($s) => (int) ($s->pivot->qty ?? 0) > 0);
        $total = $subjects->count();

        if (! $studentId || $total === 0) {
            return ['total' => $total, 'done' => 0, 'ongoing' => null];
        }

        $histories = ExamHistory::where('exam_id', $exam->id)
            ->where('student_id', $studentId)
            ->get()
            ->keyBy('subject_id');

        $done = 0;
        $ongoingSubjectId = null;
        foreach ($subjects as $subject) {
            $history = $histories->get($subject->id);
            if ($history && $history->status !== 'in_progress') {
                $done++;
            } elseif ($history && $history->status === 'in_progress' && $ongoingSubjectId === null) {
                $ongoingSubjectId = $subject->id;
            }
        }

        return ['total' => $total, 'done' => $done, 'ongoing' => $ongoingSubjectId];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                // Ujian yang masih boleh DIMULAI. Riwayat/in-progress tetap
                // bisa diakses lewat halaman Riwayat & tombol Lanjutkan.
                $query->openForStudents();
            })
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')
                    ->label('Nama Ujian')
                    ->searchable()
                    ->weight('bold')
                    ->description(fn (Exam $record) => $record->subjects
                        ->filter(fn ($s) => (int) ($s->pivot->qty ?? 0) > 0)
                        ->map(fn ($s) => $s->name.' ('.$s->pivot->qty.' soal)')
                        ->join(' • ')),
                TextColumn::make('duration')
                    ->label('Durasi')
                    ->formatStateUsing(fn ($state) => "{$state} Menit")
                    ->sortable(),
                TextColumn::make('threshold')
                    ->label('KKM / Min. Skor')
                    ->numeric(2)
                    ->sortable(),
                TextColumn::make('started_at')
                    ->label('Waktu Mulai')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
                TextColumn::make('expired_at')
                    ->label('Batas Akhir')
                    ->dateTime('d M Y H:i')
                    ->placeholder('-')
                    ->sortable(),
                TextColumn::make('student_status')
                    ->label('Progres Mapel')
                    ->badge()
                    ->state(function (Exam $record): string {
                        $studentId = auth()->user()?->student?->id;
                        $progress = self::subjectProgress($record, $studentId);

                        if ($progress['total'] === 0) {
                            return 'Belum ada mapel';
                        }
                        if ($progress['ongoing']) {
                            return 'Sedang dikerjakan';
                        }
                        if ($progress['done'] === 0) {
                            return 'Belum dikerjakan';
                        }
                        if ($progress['done'] >= $progress['total']) {
                            return 'Semua mapel selesai';
                        }

                        return "Selesai {$progress['done']}/{$progress['total']} mapel";
                    })
                    ->color(function (string $state): string {
                        return match (true) {
                            $state === 'Semua mapel selesai' => 'success',
                            str_starts_with($state, 'Selesai') => 'info',
                            $state === 'Sedang dikerjakan' => 'warning',
                            default => 'gray',
                        };
                    }),
            ])
            ->recordActions([
                Action::make('start')
                    ->label(function (Exam $record): string {
                        $studentId = auth()->user()?->student?->id;
                        $progress = self::subjectProgress($record, $studentId);

                        if ($progress['ongoing']) {
                            return 'Lanjutkan Ujian';
                        }
                        if ($progress['total'] > 0 && $progress['done'] >= $progress['total']) {
                            return 'Semua Selesai';
                        }

                        return 'Pilih Mapel & Mulai';
                    })
                    ->icon(function (Exam $record): BackedEnum|string {
                        $studentId = auth()->user()?->student?->id;
                        $progress = self::subjectProgress($record, $studentId);

                        if ($progress['ongoing']) {
                            return Heroicon::OutlinedPlay;
                        }
                        if ($progress['total'] > 0 && $progress['done'] >= $progress['total']) {
                            return Heroicon::OutlinedLockClosed;
                        }

                        return Heroicon::OutlinedPaperAirplane;
                    })
                    ->color(function (Exam $record): string {
                        $studentId = auth()->user()?->student?->id;
                        $progress = self::subjectProgress($record, $studentId);

                        if ($progress['ongoing']) {
                            return 'warning';
                        }
                        if ($progress['total'] > 0 && $progress['done'] >= $progress['total']) {
                            return 'gray';
                        }

                        return 'primary';
                    })
                    ->button()
                    ->disabled(function (Exam $record): bool {
                        if ($record->started_at && $record->started_at->isFuture()) {
                            return true;
                        }

                        $studentId = auth()->user()?->student?->id;
                        $progress = self::subjectProgress($record, $studentId);

                        return $progress['total'] > 0 && $progress['done'] >= $progress['total'] && ! $progress['ongoing'];
                    })
                    ->url(fn ($record) => route(StartingExam::getRouteName(), ['exam' => $record])),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageExams::route('/'),
            'mulai' => StartingExam::route('/{exam}/mulai'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
