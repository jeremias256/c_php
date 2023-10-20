<?php
    $meses = array(
        'enero', 'febrero', 'marzo', 'abril',
        'mayo', 'junio', 'julio', 'agosto',
        'septiembre', 'octubre', 'noviembre','diciembre'
    );

    echo $meses[3] . '<br>';
    $ultimoMes = count($meses) - 1;
    echo $meses[$ultimoMes];
?>