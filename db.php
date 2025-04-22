<?php
require_once 'vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

$pdo = DriverManager::getConnection([
    'dbname' => 'usarps',
    'user' => 'root',
    'password' => '',
    'host' => '127.0.0.1',
    'driver' => 'pdo_mysql',
]);