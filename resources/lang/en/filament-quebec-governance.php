<?php

return [
    'resource' => [
        'label' => 'Processing activity',
        'plural_label' => 'Processing activities',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Purpose',
        'persons' => 'Persons concerned',
        'data_categories' => 'Other information',
        'models' => 'Models',
        'recipients' => 'Recipients',
        'recipient_name' => 'Name',
        'role' => 'Role',
        'outside_quebec' => 'Communicated outside Quebec',
        'place' => 'Province or country',
        'pia' => 'Privacy impact assessment done (s. 17)',
        'retention' => 'Retention',
        'security_measures' => 'Security measures (s. 10)',
    ],

    'placeholders' => [
        'persons' => 'customers, employees...',
    ],

    'help' => [
        'data_categories' => 'Information not declared on a model with #[PersonalData].',
        'models' => 'The personal information declared on these models joins the activity.',
        'outside_quebec' => 'Assess the privacy factors before communicating personal information outside Quebec, and communicate it only with adequate protection (s. 17).',
    ],

    'roles' => [
        'service_provider' => 'Service provider',
        'third_party' => 'Third party',
        'public_body' => 'Public body',
    ],

    'actions' => [
        'export' => 'Export governance (JSON)',
    ],
];
