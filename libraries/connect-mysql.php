<?php

include_once ('../libraries/Database.php');

$host = 'localhost:3306';
$db   = 'blogs';
$user = 'root';
$pass = '';
$charset = 'utf8';

$database = new Database($host, $db, $user, $pass);
return $database;

