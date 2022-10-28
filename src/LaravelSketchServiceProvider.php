<?php

namespace Mintreu\LaravelSketch;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mintreu\LaravelSketch\Commands\LaravelSketchCommand;

class LaravelSketchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sketch')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-sketch_table')
            ->hasCommand(LaravelSketchCommand::class);
    }
}
