<?php

namespace App\Filament\Resources\SystemMigration\Pages;

use App\Filament\Resources\SystemMigration\SystemMigrationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSystemMigrations extends ListRecords
{
    protected static string $resource = SystemMigrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
