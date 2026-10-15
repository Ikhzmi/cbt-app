<?php

namespace App\Filament\Test\Resources\ExamHistories\Pages;

use App\Filament\Test\Resources\ExamHistories\ExamHistoryResource;
use Filament\Resources\Pages\ListRecords;

class ListExamHistories extends ListRecords
{
    protected static string $resource = ExamHistoryResource::class;

    public function mount(): void
    {
        parent::mount();

        // Selesaikan otomatis sesi yang sudah lewat durasi/expired agar tidak
        // ada status 'in_progress' yang nyangkut dan tak muncul di riwayat.
        $studentId = auth()->user()?->student?->id;
        if ($studentId) {
            \App\Models\ExamHistory::autoSubmitExpiredForStudent($studentId);
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            // Read-only for students, no create action
        ];
    }
}
