<?php

namespace App\Filament\Resources\Exams\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class ExamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label("Nama Ujian")
                    ->required(),
                TextInput::make('duration')
                    ->label("Durasi (Menit)")
                    ->required()
                    ->numeric(),
                TextInput::make('threshold')
                    ->label("KKM / Min. Skor")
                    ->required()
                    ->numeric()
                    ->default(50.0),
                Toggle::make('exact_time')
                    ->label("Tepat Waktu")
                    ->live()
                    ->required(),
                DateTimePicker::make('started_at')
                    ->label("Waktu Mulai")
                    ->required(),
                DateTimePicker::make('expired_at')
                    ->label("Batas Waktu")
                    ->seconds(false)
                    ->native(false)
                    ->displayFormat('d F Y H:i')
                    ->hidden(fn (Get $get): bool =>
                        $get('exact_time')
                    ),
                Toggle::make('is_available')
                    ->label("Ketersediaan")
                    ->required(),
            ]);
    }
}
