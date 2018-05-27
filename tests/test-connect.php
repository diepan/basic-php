<?php

$database = include_once('../libraries/connect-mysql.php');

$menus = [
    'fields' => 'name',
    'values' => [
        ['Trang chủ'],
        ['Nhật ký'],
        ['Lập trình'],
        ['Về tôi'],
        ['Liên hệ']
    ]
];
//$database->insert($menus, 'menus')->execute();
//$database->delete('menus')->execute();

$infomation = [
    'fields' => '`key`, value',
    'values' => [
        ['phone', '01643160702'],
        ['name', 'An'],
        ['age', '19'],
        ['facebook', 'Diep An']
    ]
];
$database->insert($infomation, 'infos')->execute();
