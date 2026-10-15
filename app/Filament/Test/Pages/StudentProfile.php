<?php

namespace App\Filament\Test\Pages;

use App\Models\User;
use BackedEnum;
use Filament\Auth\Pages\EditProfile as BaseEditProfile;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Override;

class StudentProfile extends BaseEditProfile
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserCircle;

    protected static ?string $navigationLabel = 'Profil & Password';

    protected static ?string $title = 'Profil Siswa';

    public static function getLabel(): string
    {
        return 'Profil Siswa';
    }

    #[Override]
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Identitas Siswa')
                    ->description('Data identitas resmi siswa yang terdaftar di sistem.')
                    ->schema([
                        TextInput::make('username')
                            ->label('Nomor Induk Siswa (NIS)')
                            ->disabled()
                            ->dehydrated(false),
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->disabled()
                            ->dehydrated(false),
                    ])->columns(2),

                Section::make('Ganti Kata Sandi')
                    ->description('Perbarui kata sandi akun Anda secara berkala untuk menjaga keamanan.')
                    ->schema([
                        $this->getCurrentPasswordFormComponent()
                            ->label('Password Saat Ini')
                            ->placeholder('Masukkan password Anda saat ini'),
                        $this->getPasswordFormComponent()
                            ->label('Password Baru')
                            ->placeholder('Minimal 8 karakter')
                            ->required(fn ($get) => filled($get('currentPassword'))),
                        $this->getPasswordConfirmationFormComponent()
                            ->label('Konfirmasi Password Baru')
                            ->placeholder('Ulangi password baru Anda')
                            ->required(fn ($get) => filled($get('password'))),
                    ])->columns(1),
            ]);
    }
}
