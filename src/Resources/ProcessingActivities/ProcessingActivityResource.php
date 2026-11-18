<?php

namespace JeffersonGoncalves\Filament\QuebecGovernance\Resources\ProcessingActivities;

use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use JeffersonGoncalves\Filament\QuebecGovernance\QuebecGovernancePlugin;
use JeffersonGoncalves\Filament\QuebecGovernance\Resources\ProcessingActivities\Pages\CreateProcessingActivity;
use JeffersonGoncalves\Filament\QuebecGovernance\Resources\ProcessingActivities\Pages\EditProcessingActivity;
use JeffersonGoncalves\Filament\QuebecGovernance\Resources\ProcessingActivities\Pages\ListProcessingActivities;
use JeffersonGoncalves\Quebec\Quebec;
use JeffersonGoncalves\QuebecGovernance\Models\ProcessingActivity;

class ProcessingActivityResource extends Resource
{
    protected static ?string $model = ProcessingActivity::class;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('name')
                    ->label(static::label('fields.name'))
                    ->required()
                    ->maxLength(255),
                Textarea::make('purpose')
                    ->label(static::label('fields.purpose'))
                    ->required()
                    ->columnSpanFull(),
                TagsInput::make('persons')
                    ->label(static::label('fields.persons'))
                    ->placeholder(static::label('placeholders.persons')),
                TagsInput::make('data_categories')
                    ->label(static::label('fields.data_categories'))
                    ->helperText(static::label('help.data_categories')),
                CheckboxList::make('models')
                    ->label(static::label('fields.models'))
                    ->helperText(static::label('help.models'))
                    ->options(fn (): array => collect(app(Quebec::class)->models())
                        ->mapWithKeys(fn (string $model): array => [$model => class_basename($model)])
                        ->all())
                    ->columns(3)
                    ->columnSpanFull(),
                Repeater::make('recipients')
                    ->label(static::label('fields.recipients'))
                    ->schema([
                        TextInput::make('name')
                            ->label(static::label('fields.recipient_name'))
                            ->required(),
                        Select::make('role')
                            ->label(static::label('fields.role'))
                            ->options(static::options('roles')),
                    ])
                    ->columns(2)
                    ->defaultItems(0)
                    ->columnSpanFull(),
                Repeater::make('outside_quebec')
                    ->label(static::label('fields.outside_quebec'))
                    ->helperText(static::label('help.outside_quebec'))
                    ->schema([
                        TextInput::make('place')
                            ->label(static::label('fields.place'))
                            ->required(),
                        Toggle::make('pia')
                            ->label(static::label('fields.pia'))
                            ->inline(false),
                    ])
                    ->columns(2)
                    ->defaultItems(0)
                    ->columnSpanFull(),
                TextInput::make('retention')
                    ->label(static::label('fields.retention')),
                Textarea::make('security_measures')
                    ->label(static::label('fields.security_measures')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(static::label('fields.name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('persons')
                    ->label(static::label('fields.persons'))
                    ->badge(),
                TextColumn::make('models')
                    ->label(static::label('fields.models'))
                    ->formatStateUsing(fn (string $state): string => class_basename($state))
                    ->badge()
                    ->color('gray'),
                TextColumn::make('outside_quebec')
                    ->label(static::label('fields.outside_quebec'))
                    ->state(fn (ProcessingActivity $record): array => array_column($record->outside_quebec ?? [], 'place'))
                    ->badge()
                    ->color('warning')
                    ->placeholder('-'),
            ])
            ->defaultSort('name')
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProcessingActivities::route('/'),
            'create' => CreateProcessingActivity::route('/create'),
            'edit' => EditProcessingActivity::route('/{record}/edit'),
        ];
    }

    /**
     * @return array<string, string>
     */
    protected static function options(string $group): array
    {
        return (array) __("filament-quebec-governance::filament-quebec-governance.{$group}");
    }

    public static function label(string $key): string
    {
        return __("filament-quebec-governance::filament-quebec-governance.{$key}");
    }

    public static function getModelLabel(): string
    {
        return static::label('resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return static::label('resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return QuebecGovernancePlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return QuebecGovernancePlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return QuebecGovernancePlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return QuebecGovernancePlugin::get()->getSlug();
    }
}
