<?php

namespace App\Filament\Test\Widgets;

use App\Models\Exam;
use App\Models\ExamHistory;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class StudentStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $student = Auth::user()?->student;
        $studentId = $student?->id;

        if (!$studentId) {
            return [];
        }

        // Hitung ujian aktif yang tersedia (definisi sama dengan menu Exam)
        $availableExamsCount = Exam::query()
            ->openForStudents()
            ->count();

        // Riwayat ujian siswa
        $completedExams = ExamHistory::where('student_id', $studentId)
            ->where('status', '!=', 'in_progress')
            ->get();

        $completedCount = $completedExams->count();
        $passedCount = $completedExams->where('is_passed', true)->count();
        $averageScore = $completedCount > 0 ? round($completedExams->avg('score'), 1) : 0;

        return [
            Stat::make('Ujian Tersedia', $availableExamsCount)
                ->description('Ujian aktif yang dapat dikerjakan')
                ->descriptionIcon('heroicon-o-pencil-square')
                ->color('primary'),

            Stat::make('Ujian Telah Selesai', $completedCount)
                ->description("{$passedCount} Ujian Dinyatakan Lulus")
                ->descriptionIcon('heroicon-o-check-badge')
                ->color('success'),

            Stat::make('Rata-rata Nilai', $averageScore)
                ->description($completedCount > 0 ? 'Dari seluruh ujian yang diselesaikan' : 'Belum ada ujian selesai')
                ->descriptionIcon('heroicon-o-academic-cap')
                ->color($averageScore >= 75 ? 'success' : ($averageScore >= 50 ? 'warning' : 'gray')),
        ];
    }
}
