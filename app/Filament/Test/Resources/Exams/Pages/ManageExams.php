<?php

namespace App\Filament\Test\Resources\Exams\Pages;

use App\Filament\Test\Resources\Exams\ExamResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageExams extends ManageRecords
{
    protected static string $resource = ExamResource::class;

    public function mount(): void
    {
        parent::mount();

        // Segarkan progres: sesi yang sudah lewat durasi/expired otomatis
        // dinilai agar badge tidak stuck di "Sedang dikerjakan".
        $studentId = auth()->user()?->student?->id;
        if ($studentId) {
            \App\Models\ExamHistory::autoSubmitExpiredForStudent($studentId);
        }
    }

}
