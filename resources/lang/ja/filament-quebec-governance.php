<?php

return [
    'resource' => [
        'label' => '処理活動',
        'plural_label' => '処理活動',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '目的',
        'persons' => '対象者',
        'data_categories' => 'その他の情報',
        'models' => 'モデル',
        'recipients' => '提供先',
        'recipient_name' => '名称',
        'role' => '役割',
        'outside_quebec' => 'ケベック州外への提供',
        'place' => '州または国',
        'pia' => 'プライバシー影響評価実施済み（第17条）',
        'retention' => '保存期間',
        'security_measures' => '安全管理措置（第10条）',
    ],

    'placeholders' => [
        'persons' => '顧客、従業員…',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] でモデルに申告されていない情報。',
        'models' => 'これらのモデルで申告された個人情報が活動に紐付けられます。',
        'outside_quebec' => 'ケベック州外に個人情報を提供する前にプライバシー要因を評価し、適切な保護がある場合にのみ提供してください（第17条）。',
    ],

    'roles' => [
        'service_provider' => 'サービス提供者',
        'third_party' => '第三者',
        'public_body' => '公的機関',
    ],

    'actions' => [
        'export' => 'ガバナンスをエクスポート（JSON）',
    ],
];
