<?php

namespace App\Filament\Resources\SystemMigration\Pages;

use App\Filament\Resources\SystemMigration\SystemMigrationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSystemMigration extends EditRecord
{
    protected static string $resource = SystemMigrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
