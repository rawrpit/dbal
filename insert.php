<?php
require_once 'vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

$conn = DriverManager::getConnection([
    'dbname' => 'usarps',
    'user' => 'root',
    'password' => '',
    'host' => '127.0.0.1',
    'driver' => 'pdo_mysql',
]);

$player = $_POST['player_name'] ?? '';
$pick = $_POST['pick'] ?? '';

if ($player && $pick) {
    $conn->insert('game_rounds', [
        'player_name' => $player,
        'pick' => $pick,
        'played_at' => date('Y-m-d H:i:s')
    ]);
}

header('Location: index.php');
