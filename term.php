<?php
$taboo = $_GET['taboo'];
$text = $_GET['text'];

$my_first_string = $text . '' . strlen($text);
$my_second_string = str_replace("$taboo", '***', $text);
$my_second_string .= strlen($my_second_string);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 2</title>
</head>

<body>
    <h1><?= $my_first_string ?></h1>
    <h1><?= $my_second_string ?></h1>
</body>

</html>