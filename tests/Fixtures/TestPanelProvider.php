<?php

namespace JeffersonGoncalves\Filament\QuebecGovernance\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\QuebecGovernance\QuebecGovernancePlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                QuebecGovernancePlugin::make(),
            ]);
    }
}
