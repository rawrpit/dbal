<?php
require 'db.php';
$rounds = $pdo->fetchAllAssociative("SELECT * FROM game_rounds ORDER BY game_time DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>USARPS Championship</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 1rem;
            max-width: 600px;
            margin: auto;
        }

        .round {
            border-bottom: 1px solid #ccc;
            padding: 0.5rem 0;
        }

        .round span {
            display: inline-block;
            width: 30%;
        }

        @media (max-width: 600px) {
            .round span {
                display: block;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <h1>USARPS Championship</h1>
    <p>Turnierdatum: 10.Oktober 1910 </p>

    <h2>Spielrunden</h2>

    <?php foreach ($rounds as $runde) { ?>
        <div class="round">
            <p><b><?php echo $runde['player_name']; ?></b></p>

            <p><?php echo $runde['symbol']; ?></p>

            <p><?php echo $runde['game_time']; ?></p>

            <p><a href="delete.php?id=<?php echo $runde['id']; ?>">Delete</a></p>
        </div>
    <?php } ?>

    <p><a href="add.php"> + Add new Round</a></p>
</body>

</html>