<?php

namespace UniqueIdForLaravel;

use Illuminate\Support\ServiceProvider;

class UniqueIdForLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // publish the config file to main project
        $this->publishes([
            __DIR__.'/../config/unique-id.php' => config_path('unique-id.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/unique-id.php', 'unique-id');
    }
}
