<?php

return [
    'resource' => [
        'label' => 'İşleme faaliyeti',
        'plural_label' => 'İşleme faaliyetleri',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Amaç',
        'persons' => 'İlgili kişiler',
        'data_categories' => 'Diğer bilgiler',
        'models' => 'Modeller',
        'recipients' => 'Alıcılar',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'outside_quebec' => 'Quebec dışına aktarılan',
        'place' => 'Eyalet veya ülke',
        'pia' => 'Gizlilik etki değerlendirmesi yapıldı (md. 17)',
        'retention' => 'Saklama',
        'security_measures' => 'Güvenlik önlemleri (md. 10)',
    ],

    'placeholders' => [
        'persons' => 'müşteriler, çalışanlar...',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] ile bir modelde beyan edilmemiş bilgiler.',
        'models' => 'Bu modellerde beyan edilen kişisel bilgiler faaliyete eklenir.',
        'outside_quebec' => 'Kişisel bilgileri Quebec dışına aktarmadan önce gizlilik etkenlerini değerlendirin ve yalnızca yeterli koruma varsa aktarın (md. 17).',
    ],

    'roles' => [
        'service_provider' => 'Hizmet sağlayıcı',
        'third_party' => 'Üçüncü taraf',
        'public_body' => 'Kamu kurumu',
    ],

    'actions' => [
        'export' => 'Yönetişimi dışa aktar (JSON)',
    ],
];
