<?php

namespace App\Filament\Test\Widgets;

use App\Filament\Test\Pages\StudentProfile;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class AccountSecurityWidget extends Widget
{
    protected string $view = 'filament.test.widgets.account-security';

    protected static ?int $sort = -2;

    protected int|string|array $columnSpan = 1;

    public static function canView(): bool
    {
        return (bool) Auth::user()?->student;
    }

    public function getProfileUrl(): string
    {
        try {
            return StudentProfile::getUrl(panel: 'test');
        } catch (\Throwable) {
            return '/ujian/profile';
        }
    }
}
