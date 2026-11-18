<?php

return [
    'resource' => [
        'label' => 'Attività di trattamento',
        'plural_label' => 'Attività di trattamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalità',
        'persons' => 'Persone interessate',
        'data_categories' => 'Altre informazioni',
        'models' => 'Modelli',
        'recipients' => 'Destinatari',
        'recipient_name' => 'Nome',
        'role' => 'Ruolo',
        'outside_quebec' => 'Comunicate fuori dal Québec',
        'place' => 'Provincia o paese',
        'pia' => 'Valutazione d\'impatto sulla privacy effettuata (art. 17)',
        'retention' => 'Conservazione',
        'security_measures' => 'Misure di sicurezza (art. 10)',
    ],

    'placeholders' => [
        'persons' => 'clienti, dipendenti...',
    ],

    'help' => [
        'data_categories' => 'Informazioni non dichiarate su un modello con #[PersonalData].',
        'models' => 'Le informazioni personali dichiarate su questi modelli si aggiungono all\'attività.',
        'outside_quebec' => 'Valuta i fattori di privacy prima di comunicare informazioni personali fuori dal Québec e comunicale solo con una protezione adeguata (art. 17).',
    ],

    'roles' => [
        'service_provider' => 'Fornitore di servizi',
        'third_party' => 'Terza parte',
        'public_body' => 'Ente pubblico',
    ],

    'actions' => [
        'export' => 'Esporta governance (JSON)',
    ],
];
