<?php

namespace JeffersonGoncalves\Filament\QuebecGovernance;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class QuebecGovernanceServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-quebec-governance';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
