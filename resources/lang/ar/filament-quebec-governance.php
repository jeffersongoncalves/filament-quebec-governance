<?php

return [
    'resource' => [
        'label' => 'عملية معالجة',
        'plural_label' => 'عمليات المعالجة',
    ],

    'fields' => [
        'name' => 'الاسم',
        'purpose' => 'الغرض',
        'persons' => 'الأشخاص المعنيون',
        'data_categories' => 'معلومات أخرى',
        'models' => 'النماذج',
        'recipients' => 'المستلمون',
        'recipient_name' => 'الاسم',
        'role' => 'الدور',
        'outside_quebec' => 'تُبلَّغ خارج كيبيك',
        'place' => 'المقاطعة أو الدولة',
        'pia' => 'تم إجراء تقييم الأثر على الخصوصية (المادة 17)',
        'retention' => 'الاحتفاظ',
        'security_measures' => 'تدابير الأمن (المادة 10)',
    ],

    'placeholders' => [
        'persons' => 'العملاء، الموظفون...',
    ],

    'help' => [
        'data_categories' => 'معلومات غير معلنة في نموذج باستخدام #[PersonalData].',
        'models' => 'تنضم المعلومات الشخصية المعلنة في هذه النماذج إلى النشاط.',
        'outside_quebec' => 'قيّم عوامل الخصوصية قبل إبلاغ المعلومات الشخصية خارج كيبيك، ولا تبلّغها إلا بحماية كافية (المادة 17).',
    ],

    'roles' => [
        'service_provider' => 'مقدم خدمة',
        'third_party' => 'طرف ثالث',
        'public_body' => 'هيئة عامة',
    ],

    'actions' => [
        'export' => 'تصدير الحوكمة (JSON)',
    ],
];
