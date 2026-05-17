<?php

namespace AlwaysCurious\FilamentAdvancedUser;

use AlwaysCurious\FilamentAdvancedUser\Commands\FilamentAdvancedUserCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
