<?php

return [
    'resource' => [
        'label' => 'Czynność przetwarzania',
        'plural_label' => 'Czynności przetwarzania',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'purpose' => 'Cel',
        'persons' => 'Osoby, których dotyczy',
        'data_categories' => 'Inne informacje',
        'models' => 'Modele',
        'recipients' => 'Odbiorcy',
        'recipient_name' => 'Nazwa',
        'role' => 'Rola',
        'outside_quebec' => 'Przekazywane poza Quebec',
        'place' => 'Prowincja lub kraj',
        'pia' => 'Ocena skutków dla prywatności wykonana (art. 17)',
        'retention' => 'Przechowywanie',
        'security_measures' => 'Środki bezpieczeństwa (art. 10)',
    ],

    'placeholders' => [
        'persons' => 'klienci, pracownicy...',
    ],

    'help' => [
        'data_categories' => 'Informacje niezadeklarowane w modelu za pomocą #[PersonalData].',
        'models' => 'Informacje osobowe zadeklarowane w tych modelach dołączają do czynności.',
        'outside_quebec' => 'Oceń czynniki prywatności przed przekazaniem informacji osobowych poza Quebec i przekazuj je tylko przy odpowiedniej ochronie (art. 17).',
    ],

    'roles' => [
        'service_provider' => 'Usługodawca',
        'third_party' => 'Strona trzecia',
        'public_body' => 'Organ publiczny',
    ],

    'actions' => [
        'export' => 'Eksportuj ład (JSON)',
    ],
];
