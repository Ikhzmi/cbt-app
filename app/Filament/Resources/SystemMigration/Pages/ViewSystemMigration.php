<?php

namespace App\Filament\Resources\SystemMigration\Pages;

use App\Filament\Resources\SystemMigration\SystemMigrationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSystemMigration extends ViewRecord
{
    protected static string $resource = SystemMigrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
