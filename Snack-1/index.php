<!-- 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->
<?php

$basketGames = [
    [
        "homeTeam" => "Olimpia Milano",
        "awayTeam" => "Cantù",
        "homePoints" => "55",
        "awayPoints" => "60"
    ],
    [
        "homeTeam" => "Pallacanestro Regiana",
        "awayTeam" => "Pallacanestro Pavia",
        "homePoints" => "60",
        "awayPoints" => "70"
    ],
    [
        "homeTeam" => "Pallacanestro Roseto",
        "awayTeam" => "Pallacanestro Viola",
        "homePoints" => "45",
        "awayPoints" => "62"
    ],
    [
        "homeTeam" => "Basket Torino",
        "awayTeam" => "Basket Lazio",
        "homePoints" => "50",
        "awayPoints" => "50"
    ],
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1 | Basket Games</title>
</head>
<body>
    <h1>22/06/2021 Basket Games Results:</h1>
    <?php 
    foreach($basketGames as $game) {
        echo "<div>{$game["homeTeam"]} - {$game["awayTeam"]} | {$game["homePoints"]}-{$game["awayPoints"]}</div>";
    }
    ?>
</body>
</html>