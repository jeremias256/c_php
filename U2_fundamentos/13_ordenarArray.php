<?php
$meses = array(
    'enero', 'febrero', 'marzo', 'abril',
    'mayo', 'junio', 'julio', 'agosto',
    'septiembre', 'octubre', 'noviembre', 'diciembre'
);

$numeros = array(23, 45, 2, 122, 444, 10000);
sort($numeros); #ordena alfabeticamente

rsort($meses) #reverse sort

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del year</title>
</head>

<body>
    <h1>Meses</h1>
    <ul>
        <?php
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>' . '<br>';
        }
        ?>
    </ul>
    <br>
    <ul>
        <?php
        foreach ($numeros as $num) {
            echo '<li>' . $num . '</li>' . '<br>';
        }
        ?>
    </ul>
</body>

</html>