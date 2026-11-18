<?php

return [
    'resource' => [
        'label' => 'Ishlov berish faoliyati',
        'plural_label' => 'Ishlov berish faoliyatlari',
    ],

    'fields' => [
        'name' => 'Nomi',
        'purpose' => 'Maqsad',
        'persons' => 'Tegishli shaxslar',
        'data_categories' => 'Boshqa axborot',
        'models' => 'Modellar',
        'recipients' => 'Qabul qiluvchilar',
        'recipient_name' => 'Nomi',
        'role' => 'Rol',
        'outside_quebec' => 'Kvebekdan tashqariga uzatiladi',
        'place' => 'Viloyat yoki mamlakat',
        'pia' => 'Maxfiylikka ta\'sirni baholash o\'tkazilgan (17-modda)',
        'retention' => 'Saqlash',
        'security_measures' => 'Xavfsizlik choralari (10-modda)',
    ],

    'placeholders' => [
        'persons' => 'mijozlar, xodimlar...',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] bilan modelda e\'lon qilinmagan axborot.',
        'models' => 'Ushbu modellarda e\'lon qilingan shaxsiy axborot faoliyatga qo\'shiladi.',
        'outside_quebec' => 'Shaxsiy axborotni Kvebekdan tashqariga uzatishdan oldin maxfiylik omillarini baholang va faqat yetarli himoya bilan uzating (17-modda).',
    ],

    'roles' => [
        'service_provider' => 'Xizmat ko\'rsatuvchi',
        'third_party' => 'Uchinchi tomon',
        'public_body' => 'Davlat organi',
    ],

    'actions' => [
        'export' => 'Boshqaruvni eksport qilish (JSON)',
    ],
];
