<?php

namespace OGKit\OGKit;

use OGKit\OGKit\Commands\OGKitCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OGKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ogkit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ogkit_table')
            ->hasCommand(OGKitCommand::class);
    }
}
