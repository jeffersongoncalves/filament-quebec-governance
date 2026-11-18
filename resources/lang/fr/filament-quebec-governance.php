<?php

return [
    'resource' => [
        'label' => 'Activité de traitement',
        'plural_label' => 'Activités de traitement',
    ],

    'fields' => [
        'name' => 'Nom',
        'purpose' => 'Finalité',
        'persons' => 'Personnes concernées',
        'data_categories' => 'Autres renseignements',
        'models' => 'Modèles',
        'recipients' => 'Destinataires',
        'recipient_name' => 'Nom',
        'role' => 'Rôle',
        'outside_quebec' => 'Communiqués à l\'extérieur du Québec',
        'place' => 'Province ou pays',
        'pia' => 'Évaluation des facteurs relatifs à la vie privée faite (art. 17)',
        'retention' => 'Conservation',
        'security_measures' => 'Mesures de sécurité (art. 10)',
    ],

    'placeholders' => [
        'persons' => 'clients, employés...',
    ],

    'help' => [
        'data_categories' => 'Renseignements non déclarés sur un modèle avec #[PersonalData].',
        'models' => 'Les renseignements personnels déclarés sur ces modèles s\'ajoutent à l\'activité.',
        'outside_quebec' => 'Évaluez les facteurs relatifs à la vie privée avant de communiquer des renseignements personnels à l\'extérieur du Québec, et ne les communiquez qu\'avec une protection adéquate (art. 17).',
    ],

    'roles' => [
        'service_provider' => 'Fournisseur de services',
        'third_party' => 'Tiers',
        'public_body' => 'Organisme public',
    ],

    'actions' => [
        'export' => 'Exporter la gouvernance (JSON)',
    ],
];
