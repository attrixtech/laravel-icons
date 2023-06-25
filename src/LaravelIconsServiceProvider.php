<?php

namespace Attrixtech\LaravelIcons;

use Illuminate\Support\ServiceProvider;

class LaravelIconsServiceProvider extends ServiceProvider
{
    public function boot():void
    {
        $this->publishes([
            __DIR__ . '/../resources/views/components/icons' => base_path('resources/views/components/icons'),
        ], 'laravel-icons');
    }
}
