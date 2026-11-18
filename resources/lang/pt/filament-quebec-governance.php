<?php

return [
    'resource' => [
        'label' => 'Atividade de tratamento',
        'plural_label' => 'Atividades de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade',
        'persons' => 'Pessoas em causa',
        'data_categories' => 'Outras informações',
        'models' => 'Modelos',
        'recipients' => 'Destinatários',
        'recipient_name' => 'Nome',
        'role' => 'Papel',
        'outside_quebec' => 'Comunicadas fora do Quebeque',
        'place' => 'Província ou país',
        'pia' => 'Avaliação de impacto na privacidade feita (art. 17)',
        'retention' => 'Conservação',
        'security_measures' => 'Medidas de segurança (art. 10)',
    ],

    'placeholders' => [
        'persons' => 'clientes, colaboradores...',
    ],

    'help' => [
        'data_categories' => 'Informações não declaradas num modelo com #[PersonalData].',
        'models' => 'As informações pessoais declaradas nestes modelos juntam-se à atividade.',
        'outside_quebec' => 'Avalie os fatores de privacidade antes de comunicar informações pessoais fora do Quebeque, e comunique-as apenas com proteção adequada (art. 17).',
    ],

    'roles' => [
        'service_provider' => 'Prestador de serviços',
        'third_party' => 'Terceiro',
        'public_body' => 'Organismo público',
    ],

    'actions' => [
        'export' => 'Exportar governação (JSON)',
    ],
];
