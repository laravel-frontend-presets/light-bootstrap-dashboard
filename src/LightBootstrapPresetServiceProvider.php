<?php

namespace LaravelFrontendPresets\LightBootstrapPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand; use Laravel\Ui\AuthCommand;

class LightBootstrapPresetServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('light-bootstrap', function ($command) {
            LightBootstrapPreset::install();
            
            $command->info('Light Bootstrap scaffolding installed successfully.');
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
