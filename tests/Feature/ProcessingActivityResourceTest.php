<?php

use JeffersonGoncalves\Filament\QuebecGovernance\QuebecGovernancePlugin;
use JeffersonGoncalves\Filament\QuebecGovernance\Resources\ProcessingActivities\Pages\CreateProcessingActivity;
use JeffersonGoncalves\Filament\QuebecGovernance\Resources\ProcessingActivities\Pages\EditProcessingActivity;
use JeffersonGoncalves\Filament\QuebecGovernance\Resources\ProcessingActivities\Pages\ListProcessingActivities;
use JeffersonGoncalves\Filament\QuebecGovernance\Resources\ProcessingActivities\ProcessingActivityResource;
use JeffersonGoncalves\Filament\QuebecGovernance\Tests\Fixtures\TestUser;
use JeffersonGoncalves\QuebecGovernance\Models\ProcessingActivity;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Person in charge', 'email' => 'privacy@example.com']));
});

it('creates a processing activity linked to models, recipients and communications outside Quebec', function () {
    Livewire::test(CreateProcessingActivity::class)
        ->fillForm([
            'name' => 'Billing',
            'purpose' => 'Issue invoices',
            'persons' => ['customers'],
            'models' => [TestUser::class],
            'recipients' => [['name' => 'Stripe', 'role' => 'service_provider']],
            'outside_quebec' => [['place' => 'United States', 'pia' => true]],
            'retention' => '6 years',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(ProcessingActivity::sole())
        ->persons->toBe(['customers'])
        ->models->toBe([TestUser::class])
        ->recipients->toBe([['name' => 'Stripe', 'role' => 'service_provider']])
        ->outside_quebec->toBe([['place' => 'United States', 'pia' => true]]);
});

it('requires a name and a purpose', function () {
    Livewire::test(CreateProcessingActivity::class)
        ->fillForm(['name' => '', 'purpose' => ''])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required', 'purpose' => 'required']);
});

it('lists and edits activities', function () {
    $activity = ProcessingActivity::create(['name' => 'Billing', 'purpose' => 'Invoices', 'outside_quebec' => [['place' => 'Ontario', 'pia' => false]]]);

    Livewire::test(ListProcessingActivities::class)
        ->assertCanSeeTableRecords([$activity])
        ->assertSee('Ontario');

    Livewire::test(EditProcessingActivity::class, ['record' => $activity->getKey()])
        ->fillForm(['purpose' => 'Issue and keep invoices'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($activity->fresh()->purpose)->toBe('Issue and keep invoices');
});

it('exports the governance as JSON', function () {
    ProcessingActivity::create(['name' => 'Billing', 'purpose' => 'Invoices', 'models' => [TestUser::class]]);

    Livewire::test(ListProcessingActivities::class)
        ->callAction('export')
        ->assertFileDownloaded('governance-'.now()->format('Y-m-d').'.json');
});

it('applies the fluent plugin options', function () {
    QuebecGovernancePlugin::get()->navigationGroup('Quebec')->slug('governance');

    expect(ProcessingActivityResource::getNavigationGroup())->toBe('Quebec')
        ->and(ProcessingActivityResource::getSlug())->toBe('governance');
});
