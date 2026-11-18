<?php

return [
    'resource' => [
        'label' => 'Verarbeitungstätigkeit',
        'plural_label' => 'Verarbeitungstätigkeiten',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Zweck',
        'persons' => 'Betroffene Personen',
        'data_categories' => 'Weitere Informationen',
        'models' => 'Modelle',
        'recipients' => 'Empfänger',
        'recipient_name' => 'Name',
        'role' => 'Rolle',
        'outside_quebec' => 'Außerhalb Quebecs übermittelt',
        'place' => 'Provinz oder Land',
        'pia' => 'Datenschutz-Folgenabschätzung durchgeführt (Art. 17)',
        'retention' => 'Aufbewahrung',
        'security_measures' => 'Sicherheitsmaßnahmen (Art. 10)',
    ],

    'placeholders' => [
        'persons' => 'Kunden, Beschäftigte...',
    ],

    'help' => [
        'data_categories' => 'Informationen, die in keinem Model mit #[PersonalData] deklariert sind.',
        'models' => 'Die in diesen Models deklarierten personenbezogenen Informationen werden der Tätigkeit zugeordnet.',
        'outside_quebec' => 'Bewerten Sie die Datenschutzfaktoren, bevor Sie personenbezogene Informationen außerhalb Quebecs übermitteln, und übermitteln Sie sie nur bei angemessenem Schutz (Art. 17).',
    ],

    'roles' => [
        'service_provider' => 'Dienstleister',
        'third_party' => 'Dritter',
        'public_body' => 'Öffentliche Stelle',
    ],

    'actions' => [
        'export' => 'Governance exportieren (JSON)',
    ],
];
