<?php

$meses = array(
    'enero', 'febrero', 'marzo', 'abril',
    'mayo', 'junio', 'julio', 'agosto',
    'septiembre', 'octubre', 'noviembre','diciembre'
);


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
            foreach($meses as $mes) {
                echo '<li>' . $mes . '</li>' . '<br>' ;
            }
        ?>
        <li></li>
    </ul>
</body>
</html>