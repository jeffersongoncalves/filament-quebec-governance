<?php

return [
    'resource' => [
        'label' => 'Operação de tratamento',
        'plural_label' => 'Operações de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade',
        'persons' => 'Pessoas envolvidas',
        'data_categories' => 'Outras informações',
        'models' => 'Modelos',
        'recipients' => 'Destinatários',
        'recipient_name' => 'Nome',
        'role' => 'Papel',
        'outside_quebec' => 'Comunicadas fora do Quebec',
        'place' => 'Província ou país',
        'pia' => 'Avaliação de impacto à privacidade feita (art. 17)',
        'retention' => 'Retenção',
        'security_measures' => 'Medidas de segurança (art. 10)',
    ],

    'placeholders' => [
        'persons' => 'clientes, funcionários...',
    ],

    'help' => [
        'data_categories' => 'Informações não declaradas em um model com #[PersonalData].',
        'models' => 'As informações pessoais declaradas nesses models entram na atividade.',
        'outside_quebec' => 'Avalie os fatores de privacidade antes de comunicar informações pessoais fora do Quebec, e comunique-as somente com proteção adequada (art. 17).',
    ],

    'roles' => [
        'service_provider' => 'Prestador de serviços',
        'third_party' => 'Terceiro',
        'public_body' => 'Órgão público',
    ],

    'actions' => [
        'export' => 'Exportar governança (JSON)',
    ],
];
