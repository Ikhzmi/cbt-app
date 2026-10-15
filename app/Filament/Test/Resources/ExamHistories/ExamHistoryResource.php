<?php

namespace App\Filament\Test\Resources\ExamHistories;

use App\Filament\Test\Resources\ExamHistories\Pages\ListExamHistories;
use App\Filament\Test\Resources\Exams\Pages\StartingExam;
use App\Models\ExamHistory;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ExamHistoryResource extends Resource
{
    protected static ?string $model = ExamHistory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClock;

    protected static ?string $navigationLabel = 'Riwayat Ujian';

    protected static ?string $modelLabel = 'Riwayat Ujian';

    protected static ?int $navigationSort = 2;

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $studentId = auth()->user()?->student?->id;

                $query->where('student_id', $studentId)
                    ->where('status', '!=', 'in_progress')
                    ->latest('finished_at');
            })
            ->columns([
                TextColumn::make('exam.title')
                    ->label('Nama Ujian')
                    ->searchable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->subject?->name ?? 'Riwayat lama (multi-mapel)'),
                TextColumn::make('subject.name')
                    ->label('Mata Pelajaran')
                    ->placeholder('Multi-mapel (lama)')
                    ->badge()
                    ->color('info'),
                TextColumn::make('finished_at')
                    ->label('Waktu Selesai')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
                TextColumn::make('duration_spent_seconds')
                    ->label('Durasi Pengerjaan')
                    ->formatStateUsing(fn ($state) => gmdate('H:i:s', abs((int) $state))),
                TextColumn::make('total_questions')
                    ->label('Soal')
                    ->alignCenter(),
                TextColumn::make('correct_count')
                    ->label('Benar')
                    ->badge()
                    ->color('success')
                    ->alignCenter(),
                TextColumn::make('wrong_count')
                    ->label('Salah')
                    ->badge()
                    ->color('danger')
                    ->alignCenter(),
                TextColumn::make('score')
                    ->label('Nilai Akhir')
                    ->numeric(2)
                    ->weight('bold')
                    ->sortable(),
                TextColumn::make('threshold')
                    ->label('KKM')
                    ->numeric(2)
                    ->color('gray'),
                TextColumn::make('is_passed')
                    ->label('Hasil Kelulusan')
                    ->badge()
                    ->state(fn ($record) => $record->is_passed ? 'LULUS' : 'GAGAL')
                    ->color(fn ($state) => $state === 'LULUS' ? 'success' : 'danger'),
                TextColumn::make('status')
                    ->label('Keterangan')
                    ->badge()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'completed' => 'Selesai',
                        'timeout_auto_submit' => 'Waktu Habis',
                        'terminated_cheat' => 'Pelanggaran',
                        default => $state,
                    })
                    ->color(fn ($state) => match ($state) {
                        'completed' => 'success',
                        'timeout_auto_submit' => 'warning',
                        'terminated_cheat' => 'danger',
                        default => 'gray',
                    }),
            ])
            ->recordActions([
                Action::make('view_result')
                    ->label('Lihat Hasil & Pembahasan')
                    ->icon(Heroicon::OutlinedDocumentMagnifyingGlass)
                    ->color('primary')
                    ->button()
                    ->url(fn (ExamHistory $record) => route(StartingExam::getRouteName(), ['exam' => $record->exam_id]).($record->subject_id ? '?subject='.$record->subject_id : '')),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListExamHistories::route('/'),
        ];
    }
}
