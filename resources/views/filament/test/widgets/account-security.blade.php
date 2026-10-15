<x-filament-widgets::widget class="fi-student-security-widget">
    <style>
        /* Samakan tinggi kotak nama (bawaan) & kotak keamanan di dasbor siswa */
        .fi-wi-widget.fi-account-widget,
        .fi-wi-widget.fi-student-security-widget {
            height: 100%;
        }
        .fi-account-widget .fi-section,
        .fi-student-security-widget .fi-section {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .fi-account-widget .fi-section-content-ctn,
        .fi-student-security-widget .fi-section-content-ctn {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }
        .fi-account-widget .fi-section-content,
        .fi-student-security-widget .fi-section-content {
            flex: 1 1 auto;
            height: 100%;
        }
    </style>

    <x-filament::section class="h-full">
        <div class="flex h-full items-center gap-x-3">
            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-gray-100 text-gray-500 dark:bg-gray-800 dark:text-gray-400">
                <svg width="24" height="24" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
            </div>

            <div class="flex-1">
                <h2 class="text-base font-semibold leading-6 text-gray-950 dark:text-white">
                    Keamanan Akun
                </h2>

                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Ganti kata sandi akun Anda
                </p>
            </div>

            <x-filament::button
                tag="a"
                :href="$this->getProfileUrl()"
                color="primary"
                :icon="\Filament\Support\Icons\Heroicon::OutlinedKey"
                labeled-from="sm"
                class="ml-auto shrink-0"
            >
                Ganti Password
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
