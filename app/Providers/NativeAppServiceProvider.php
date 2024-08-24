<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Menu::new()
            ->submenu("", Menu::new()
                ->label("Cheque Printer v" . config('nativephp.version'))
                ->separator()
                ->link('https://achyut.com.np', 'Developer')
                ->link('https://github.com/achyutkneupane', 'GitHub')
                ->separator()
                ->quit()

            )
            ->register();

        Window::open('cheque')
            ->width(600)
            ->height(450)
            ->resizable(false)
            ->darkVibrancy()
            ->position(100, 100);
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}
