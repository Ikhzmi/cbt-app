<?php

namespace App\Filament\Resources\ExamScores\Tables;

use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ExamScoresTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('started_at', 'desc')
            ->columns([
                TextColumn::make('student.nis')
                    ->label('NIS')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('student.name')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('exam.title')
                    ->label('Ujian')
                    ->searchable()
                    ->sortable()
                    ->description(fn ($record) => $record->subject?->name ?? '-'),
                TextColumn::make('subject.name')
                    ->label('Mapel')
                    ->badge()
                    ->color('info')
                    ->placeholder('-')
                    ->sortable(),
                TextColumn::make('score')
                    ->label('Nilai')
                    ->numeric(2)
                    ->weight('bold')
                    ->sortable(),
                TextColumn::make('threshold')
                    ->label('KKM')
                    ->numeric(2)
                    ->color('gray')
                    ->toggleable(),
                TextColumn::make('is_passed')
                    ->label('Kelulusan')
                    ->badge()
                    ->state(fn ($record) => $record->status === 'in_progress'
                        ? 'Proses'
                        : ($record->is_passed ? 'LULUS' : 'GAGAL'))
                    ->color(fn (string $state) => match ($state) {
                        'LULUS' => 'success',
                        'GAGAL' => 'danger',
                        default => 'warning',
                    })
                    ->sortable(),
                TextColumn::make('correct_count')
                    ->label('Benar')
                    ->badge()
                    ->color('success')
                    ->alignCenter()
                    ->toggleable(),
                TextColumn::make('wrong_count')
                    ->label('Salah')
                    ->badge()
                    ->color('danger')
                    ->alignCenter()
                    ->toggleable(),
                TextColumn::make('unanswered_count')
                    ->label('Kosong')
                    ->badge()
                    ->color('warning')
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('violation_count')
                    ->label('Pelanggaran')
                    ->badge()
                    ->color(fn ($state) => ((int) $state) >= 3 ? 'danger' : (((int) $state) > 0 ? 'warning' : 'gray'))
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Keterangan')
                    ->badge()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'completed' => 'Selesai',
                        'timeout_auto_submit' => 'Waktu Habis',
                        'terminated_cheat' => 'Pelanggaran',
                        'in_progress' => 'Dikerjakan',
                        default => $state,
                    })
                    ->color(fn ($state) => match ($state) {
                        'completed' => 'success',
                        'timeout_auto_submit' => 'warning',
                        'terminated_cheat' => 'danger',
                        'in_progress' => 'info',
                        default => 'gray',
                    }),
                TextColumn::make('finished_at')
                    ->label('Waktu Selesai')
                    ->dateTime('d M Y, H:i')
                    ->placeholder('Belum selesai')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('exam_id')
                    ->label('Ujian')
                    ->relationship('exam', 'title')
                    ->searchable()
                    ->preload(),
                SelectFilter::make('subject_id')
                    ->label('Mata Pelajaran')
                    ->relationship('subject', 'name')
                    ->searchable()
                    ->preload(),
                SelectFilter::make('is_passed')
                    ->label('Kelulusan')
                    ->options([
                        '1' => 'Lulus',
                        '0' => 'Gagal',
                    ]),
                SelectFilter::make('status')
                    ->label('Keterangan')
                    ->options([
                        'completed' => 'Selesai',
                        'timeout_auto_submit' => 'Waktu Habis',
                        'terminated_cheat' => 'Pelanggaran',
                        'in_progress' => 'Dikerjakan',
                    ]),
            ])
            ->recordActions([
                ViewAction::make(),
            ]);
    }
}
