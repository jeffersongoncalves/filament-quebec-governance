<?php

namespace JeffersonGoncalves\Filament\QuebecGovernance;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuebecGovernanceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-quebec-governance')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
