<?php

require_once __DIR__ . "/Classes/Movie.php";

$wind = new Movie("Il vento che accarezza l'erba", '10-11-2006', 'Ken Loach', 'Historic, Drama');
$ryan = new Movie('Salvate il soldato Ryan', '30-10-19989', 'Steven Spielberg', 'Historic, Drama');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <style>
        .container {
            margin: auto;
            width: fit-content;
        }
        h1 {
            color: brown;
            margin-bottom: 30px;
        }
        ol>li {
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Movie Oop Php</h1>

        <ol>
            <li>
                <ul>
                    <li>Title: <?= $wind->getTitle() ?></li>
                    <li>Release date: <?= $wind->getReleaseDate() ?></li>
                    <li>Director: <?= $wind->getDirector() ?></li>
                    <li>Genre: <?= $wind->getGenre() ?></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>Title: <?= $ryan->getTitle() ?></li>
                    <li>Release date: <?= $ryan->getReleaseDate() ?></li>
                    <li>Director: <?= $ryan->getDirector() ?></li>
                    <li>Genre: <?= $ryan->getGenre() ?></li>
                </ul>
            </li>
        </ol>
    </div>
</body>

</html>