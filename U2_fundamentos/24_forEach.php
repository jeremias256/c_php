<?php
$meses = array(
    'enero', 'febrero', 'marzo', 'abril',
    'mayo', 'junio', 'julio', 'agosto',
    'septiembre', 'octubre', 'noviembre', 'diciembre'
);

$alejandro = array('telefono' => 1139341085, 'edad' => 20, 'pais' => 'argentina');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>

<body>
    <h1>Meses con foreach</h1>
    <ul>
        <?php
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }
        echo '<br/>';
        // $info = 'telefono'
        // $valor = 1139341085
        // por cada dato traemos su valor
        // info y valor son solo nombres, se pueden cambiar
        foreach ($alejandro as $info => $valor) {
            echo '<li>' . $valor . '</li>';
        }
        ?>
    </ul>
</body>

</html>