<?php

namespace JorgeMurta\LaPopo;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JorgeMurta\LaPopo\Commands\LaPopoCommand;

class LaPopoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lapopo')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lapopo_table')
            ->hasCommand(LaPopoCommand::class);
    }
}
