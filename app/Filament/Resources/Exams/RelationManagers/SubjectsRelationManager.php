<?php

namespace App\Filament\Resources\Exams\RelationManagers;

use App\Models\Question;
use App\Models\Subject;
use Closure;
use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Override;

class SubjectsRelationManager extends RelationManager
{
    protected static string $relationship = 'subjects';

    protected static string|null $title = 'Pelajaran Yang Belum Diajarkan';

    #[Override]
    public function isReadOnly(): bool
    {
        return false;
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('#')
                ->label('No')
                ->rowIndex()
                ->width('10px'),
                TextColumn::make('name')
                    ->label('pelajaran')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Tersedia')
                    ->boolean(),
                TextColumn::make('pivot.qty')
                ->label('Jlh. Soal')
            ])
            ->headerActions([
                AttachAction::make()
                ->label('Tambah Pelajaran')
                ->preloadRecordSelect()
                ->schema(function (AttachAction $action): array {
                    return [
                        $action -> getRecordSelect()
                            ->live(),
                        TextInput::make('qty')
                        ->label('Jumlah Soal')
                        ->required()
                        ->default(10)
                        ->numeric()
                        ->minValue(1)
                        ->helperText(function (Get $get): ?string {
                            $subjectId = $get('recordId');
                            if (! $subjectId) {
                                return 'Pilih pelajaran terlebih dahulu.';
                            }
                            $count = Question::where('subject_id', $subjectId)
                                ->where('is_active', true)
                                ->count();
                            return "Soal aktif tersedia: {$count}";
                        })
                        ->rules([
                            function (Get $get): Closure {
                                return function (string $attribute, $value, Closure $fail) use ($get) {
                                    $subjectId = $get('recordId');
                                    if (! $subjectId) {
                                        return;
                                    }
                                    $availableCount = Question::where('subject_id', $subjectId)
                                        ->where('is_active', true)
                                        ->count();
                                    if ((int) $value > $availableCount) {
                                        $fail("Jumlah soal tidak boleh melebihi soal aktif yang tersedia ({$availableCount} soal).");
                                    }
                                };
                            },
                        ]),
                    ];
                })
                ->modalSubmitActionLabel('Tambah')
                ->attachAnother(false),
            ])
            ->recordActions([
                DetachAction::make()
                ->label('lepas Pelajaran'),
            ])
            ->toolbarActions([
                DetachBulkAction::make()
                ->label('lepas Pelajaran yang dipilih'),
            ])
            ->modifyQueryUsing(fn (Builder $query) => $query
                ->withoutGlobalScopes([
                    SoftDeletingScope::class,
                ]));
    }
}