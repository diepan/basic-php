<?php

include_once ('../libraries/Database.php');

$host = 'localhost:3306';
$db   = 'basic_mysql';
$user = 'root';
$pass = '';
$charset = 'utf8';

$database = new Database($host, $db, $user, $pass);
$result = $database->select(['name', 'time'], 'subjects');

foreach($result as $item){
    echo 'Mon ' . $item['name'] . ' thoi gian ' . $item['time'] . ' ngay <br />';
}

