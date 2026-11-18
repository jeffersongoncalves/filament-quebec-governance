<?php

return [
    'resource' => [
        'label' => 'Emal əməliyyatı',
        'plural_label' => 'Emal əməliyyatları',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Məqsəd',
        'persons' => 'Aidiyyəti olan şəxslər',
        'data_categories' => 'Digər məlumatlar',
        'models' => 'Modellər',
        'recipients' => 'Alıcılar',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'outside_quebec' => 'Kvebekdən kənara ötürülür',
        'place' => 'Əyalət və ya ölkə',
        'pia' => 'Məxfiliyə təsirin qiymətləndirilməsi aparılıb (maddə 17)',
        'retention' => 'Saxlanma',
        'security_measures' => 'Təhlükəsizlik tədbirləri (maddə 10)',
    ],

    'placeholders' => [
        'persons' => 'müştərilər, işçilər...',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] ilə modeldə bəyan edilməmiş məlumatlar.',
        'models' => 'Bu modellərdə bəyan edilmiş şəxsi məlumatlar fəaliyyətə əlavə olunur.',
        'outside_quebec' => 'Şəxsi məlumatları Kvebekdən kənara ötürməzdən əvvəl məxfilik amillərini qiymətləndirin və yalnız adekvat qoruma ilə ötürün (maddə 17).',
    ],

    'roles' => [
        'service_provider' => 'Xidmət təminatçısı',
        'third_party' => 'Üçüncü tərəf',
        'public_body' => 'Dövlət orqanı',
    ],

    'actions' => [
        'export' => 'İdarəetməni ixrac et (JSON)',
    ],
];
