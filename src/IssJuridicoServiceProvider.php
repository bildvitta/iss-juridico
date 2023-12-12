<?php

namespace Bildvitta\IssJuridico;

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
        $package->name('iss-juridico')
        ->hasConfigFile()
        ->hasRoute('api');
        //->hasViews()
        //->hasMigration('create_iss-juridico_table')
        //->hasCommand(IssJuridicoCommand::class);
    }

    public function register(): void
    {
        parent::register();

        $this->app->singleton('juridico', fn ($app, $args) => new IssJuridico($args[0] ?? request()->bearerToken()));
    }

}
