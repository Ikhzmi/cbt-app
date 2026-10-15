<?php

namespace App\Filament\Resources\ExamScores;

use App\Filament\Resources\ExamScores\Pages\ListExamScores;
use App\Filament\Resources\ExamScores\Pages\ViewExamScore;
use App\Filament\Resources\ExamScores\Schemas\ExamScoreInfolist;
use App\Filament\Resources\ExamScores\Tables\ExamScoresTable;
use App\Models\ExamHistory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ExamScoreResource extends Resource
{
    protected static ?string $model = ExamHistory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    protected static string|UnitEnum|null $navigationGroup = 'Monitoring';

    protected static ?string $navigationLabel = 'Nilai Ujian';

    protected static ?string $modelLabel = 'Nilai Ujian';

    protected static ?string $pluralModelLabel = 'Nilai Ujian';

    protected static ?string $recordTitleAttribute = 'id';

    public static function infolist(Schema $schema): Schema
    {
        return ExamScoreInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ExamScoresTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListExamScores::route('/'),
            'view' => ViewExamScore::route('/{record}'),
        ];
    }
}
