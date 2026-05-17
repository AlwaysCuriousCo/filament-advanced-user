<?php

namespace AlwaysCurious\FilamentAdvancedUser;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AlwaysCurious\FilamentAdvancedUser\Commands\FilamentAdvancedUserCommand;

class FilamentAdvancedUserServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-advanced-user')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_advanced_user_table')
            ->hasCommand(FilamentAdvancedUserCommand::class);
    }
}
