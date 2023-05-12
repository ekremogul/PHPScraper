<?php

namespace Ekremogul\PHPScraper;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ekremogul\PHPScraper\Commands\PHPScraperCommand;

class PHPScraperServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('phpscraper')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_phpscraper_table')
            ->hasCommand(PHPScraperCommand::class);
    }
}
