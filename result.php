<?php
$taboo = $_GET['taboo'];
$text = $_GET['text'];

$my_first_string = strlen($text);
$my_second_string = str_replace("$taboo", '***', $text);
$my_second_string_lenght = strlen($my_second_string);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document 2</title>
</head>

<body>
    <div class="container">
        <div>
            <h1>Parola da censurare : <?= $taboo ?></h1>
            <h2>Testo originale : <?= $text ?></h2>
            <h3>Lunghezza testo originale : <?= $my_first_string ?> caratteri</h3>
        </div>
        <div>
            <h2>Testo modificato: <?= $my_second_string ?></h2>
            <h3>Lunghezza testo modificato : <?= $my_second_string_lenght ?> caratteri</h3>
        </div>
    </div>
</body>

</html>