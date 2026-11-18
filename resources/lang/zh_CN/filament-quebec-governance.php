<?php

return [
    'resource' => [
        'label' => '处理活动',
        'plural_label' => '处理活动',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '目的',
        'persons' => '当事人',
        'data_categories' => '其他信息',
        'models' => '模型',
        'recipients' => '接收方',
        'recipient_name' => '名称',
        'role' => '角色',
        'outside_quebec' => '向魁北克省外提供',
        'place' => '省份或国家',
        'pia' => '已完成隐私影响评估（第17条）',
        'retention' => '保存期限',
        'security_measures' => '安全措施（第10条）',
    ],

    'placeholders' => [
        'persons' => '客户、员工……',
    ],

    'help' => [
        'data_categories' => '未通过 #[PersonalData] 在模型中声明的信息。',
        'models' => '这些模型中声明的个人信息将并入该活动。',
        'outside_quebec' => '在向魁北克省外提供个人信息之前评估隐私因素，并仅在具备充分保护时提供（第17条）。',
    ],

    'roles' => [
        'service_provider' => '服务提供方',
        'third_party' => '第三方',
        'public_body' => '公共机构',
    ],

    'actions' => [
        'export' => '导出治理（JSON）',
    ],
];
