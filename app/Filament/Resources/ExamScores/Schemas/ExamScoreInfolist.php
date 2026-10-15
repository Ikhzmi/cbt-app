<?php

namespace App\Filament\Resources\ExamScores\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ExamScoreInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('student.nis')
                    ->label('NIS'),
                TextEntry::make('student.name')
                    ->label('Nama siswa'),
                TextEntry::make('exam.title')
                    ->label('Ujian')
                    ->columnSpanFull(),
                TextEntry::make('subject.name')
                    ->label('Mata pelajaran')
                    ->placeholder('-')
                    ->badge()
                    ->color('info'),
                TextEntry::make('status')
                    ->label('Keterangan')
                    ->badge()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'completed' => 'Selesai',
                        'timeout_auto_submit' => 'Waktu Habis (otomatis)',
                        'terminated_cheat' => 'Dihentikan (pelanggaran)',
                        'in_progress' => 'Sedang dikerjakan',
                        default => $state,
                    })
                    ->color(fn ($state) => match ($state) {
                        'completed' => 'success',
                        'timeout_auto_submit' => 'warning',
                        'terminated_cheat' => 'danger',
                        'in_progress' => 'info',
                        default => 'gray',
                    }),
                TextEntry::make('score')
                    ->label('Nilai akhir')
                    ->numeric(2),
                TextEntry::make('threshold')
                    ->label('KKM'),
                TextEntry::make('is_passed')
                    ->label('Kelulusan')
                    ->badge()
                    ->state(fn ($record) => $record->status === 'in_progress'
                        ? 'Proses'
                        : ($record->is_passed ? 'LULUS' : 'GAGAL'))
                    ->color(fn (string $state) => match ($state) {
                        'LULUS' => 'success',
                        'GAGAL' => 'danger',
                        default => 'warning',
                    }),
                TextEntry::make('total_questions')
                    ->label('Total soal'),
                TextEntry::make('correct_count')
                    ->label('Benar'),
                TextEntry::make('wrong_count')
                    ->label('Salah'),
                TextEntry::make('unanswered_count')
                    ->label('Tidak dijawab'),
                TextEntry::make('violation_count')
                    ->label('Jumlah pelanggaran tab'),
                TextEntry::make('started_at')
                    ->label('Waktu mulai')
                    ->dateTime('d F Y, H:i:s'),
                TextEntry::make('finished_at')
                    ->label('Waktu selesai')
                    ->dateTime('d F Y, H:i:s')
                    ->placeholder('Belum selesai'),
                TextEntry::make('duration_spent_seconds')
                    ->label('Durasi pengerjaan')
                    ->formatStateUsing(fn ($state) => $state !== null ? gmdate('H:i:s', abs((int) $state)) : '-'),
            ]);
    }
}
