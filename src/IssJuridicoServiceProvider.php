<?php

namespace Bildvitta\IssJuridico;

use Bildvitta\IssJuridico\Commands\IssJuridicoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class IssJuridicoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('iss-juridico')
            ->hasConfigFile();
        //->hasViews()
            //->hasMigration('create_iss-juridico_table')
            //->hasCommand(IssJuridicoCommand::class);
    }
}
