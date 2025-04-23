<?php
require 'db.php';

if (isset($_GET['id'])) {
    $pdo->delete('game_rounds', ['id' => $_GET['id']]);
}

header('Location: index.php');
exit;
