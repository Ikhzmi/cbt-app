<?php

namespace App\Filament\Resources\SystemMigration;

use App\Filament\Resources\SystemMigration\Pages\CreateSystemMigration;
use App\Filament\Resources\SystemMigration\Pages\EditSystemMigration;
use App\Filament\Resources\SystemMigration\Pages\ListSystemMigrations;
use App\Filament\Resources\SystemMigration\Pages\ViewSystemMigration;
use App\Models\SystemMigration;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;
use BackedEnum;

class SystemMigrationResource extends Resource
{
    protected static ?string $model = SystemMigration::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-arrow-uturn-down';

    protected static ?string $recordTitleAttribute = 'migration';

    protected static string|UnitEnum|null $navigationGroup = 'Sistem';

    protected static ?string $modelLabel = 'Migration';

    protected static ?string $navigationLabel = 'Database Migrations';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('migration')
                    ->label('Nama Migration')
                    ->placeholder('Nama file migration')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('batch')
                    ->label('Batch')
                    ->placeholder('Nomor batch')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('migration')
                    ->label('Nama Migration'),
                TextEntry::make('batch')
                    ->label('Batch'),
                TextEntry::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y, H:i:s')
                    ->placeholder('-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('migration')
            ->defaultSort('id', 'asc')
            ->columns([
                TextColumn::make('No')
                    ->rowIndex()
                    ->width(40),
                TextColumn::make('migration')
                    ->label('Migration')
                    ->searchable(),
                TextColumn::make('batch')
                    ->label('Batch')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Ditambah')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('batch')
                    ->label('Filter Batch')
                    ->options(fn () => SystemMigration::query()->distinct()->pluck('batch', 'batch')->sort()->flip()->toArray()),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListSystemMigrations::route('/'),
            'create' => CreateSystemMigration::route('/create'),
            'view'   => ViewSystemMigration::route('/{record}'),
            'edit'   => EditSystemMigration::route('/{record}/edit'),
        ];
    }
}
