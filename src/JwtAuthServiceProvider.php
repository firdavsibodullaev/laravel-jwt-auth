<?php

namespace Firdavsi\JwtAuth;

use Firdavsi\JwtAuth\Commands\JwtAuthCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class JwtAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-jwt-auth')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_jwt_auth_table')
            ->hasCommand(JwtAuthCommand::class);
    }
}
