<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo->insert('game_rounds', [
        'player_name' => $_POST['player_name'],
        'symbol' => $_POST['symbol'],
        'game_time' => date('Y-m-d H:i:s'),
    ]);
    header('Location: index.php');
    exit;
}
?>

<form method="post">
  <label>Spielername: <input name="player_name" required></label><br>
  <label>Symbol:
    <select name="symbol">
      <option value="rock">Rock</option>
      <option value="paper">Paper</option>
      <option value="scissors">Scissors</option>
    </select>
  </label><br>
  <button type="submit">Speichern</button>
</form>
