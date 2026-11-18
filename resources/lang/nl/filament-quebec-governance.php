<?php

return [
    'resource' => [
        'label' => 'Verwerkingsactiviteit',
        'plural_label' => 'Verwerkingsactiviteiten',
    ],

    'fields' => [
        'name' => 'Naam',
        'purpose' => 'Doel',
        'persons' => 'Betrokken personen',
        'data_categories' => 'Overige informatie',
        'models' => 'Modellen',
        'recipients' => 'Ontvangers',
        'recipient_name' => 'Naam',
        'role' => 'Rol',
        'outside_quebec' => 'Buiten Quebec verstrekt',
        'place' => 'Provincie of land',
        'pia' => 'Privacy-effectbeoordeling uitgevoerd (art. 17)',
        'retention' => 'Bewaring',
        'security_measures' => 'Beveiligingsmaatregelen (art. 10)',
    ],

    'placeholders' => [
        'persons' => 'klanten, medewerkers...',
    ],

    'help' => [
        'data_categories' => 'Informatie die niet op een model met #[PersonalData] is gedeclareerd.',
        'models' => 'De persoonlijke informatie die op deze models is gedeclareerd, wordt aan de activiteit toegevoegd.',
        'outside_quebec' => 'Beoordeel de privacyfactoren voordat je persoonlijke informatie buiten Quebec verstrekt, en verstrek ze alleen met passende bescherming (art. 17).',
    ],

    'roles' => [
        'service_provider' => 'Dienstverlener',
        'third_party' => 'Derde',
        'public_body' => 'Overheidsinstantie',
    ],

    'actions' => [
        'export' => 'Governance exporteren (JSON)',
    ],
];
