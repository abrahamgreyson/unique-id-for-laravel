<?php

namespace StringKeyForLaravel\StringKeyForLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use StringKeyForLaravel\StringKeyForLaravel\Commands\StringKeyForLaravelCommand;

class StringKeyForLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('string-key-for-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_string-key-for-laravel_table')
            ->hasCommand(StringKeyForLaravelCommand::class);
    }
}
