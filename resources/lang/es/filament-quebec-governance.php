<?php

return [
    'resource' => [
        'label' => 'Actividad de tratamiento',
        'plural_label' => 'Actividades de tratamiento',
    ],

    'fields' => [
        'name' => 'Nombre',
        'purpose' => 'Finalidad',
        'persons' => 'Personas afectadas',
        'data_categories' => 'Otra información',
        'models' => 'Modelos',
        'recipients' => 'Destinatarios',
        'recipient_name' => 'Nombre',
        'role' => 'Rol',
        'outside_quebec' => 'Comunicada fuera de Quebec',
        'place' => 'Provincia o país',
        'pia' => 'Evaluación de impacto en la privacidad realizada (art. 17)',
        'retention' => 'Conservación',
        'security_measures' => 'Medidas de seguridad (art. 10)',
    ],

    'placeholders' => [
        'persons' => 'clientes, empleados...',
    ],

    'help' => [
        'data_categories' => 'Información no declarada en un modelo con #[PersonalData].',
        'models' => 'La información personal declarada en estos modelos se incorpora a la actividad.',
        'outside_quebec' => 'Evalúe los factores de privacidad antes de comunicar información personal fuera de Quebec y comuníquela solo con una protección adecuada (art. 17).',
    ],

    'roles' => [
        'service_provider' => 'Proveedor de servicios',
        'third_party' => 'Tercero',
        'public_body' => 'Organismo público',
    ],

    'actions' => [
        'export' => 'Exportar gobernanza (JSON)',
    ],
];
