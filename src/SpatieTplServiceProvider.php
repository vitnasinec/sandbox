<?php

namespace VitNasinec\SpatieTpl;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VitNasinec\SpatieTpl\Commands\SpatieTplCommand;

class SpatieTplServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('spatie-tpl')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_spatie_tpl_table')
            ->hasCommand(SpatieTplCommand::class);
    }
}
