<?php
    $meses = array(
        'enero', 'febrero', 'marzo', 'abril',
        'mayo', 'junio', 'julio', 'agosto',
        'septiembre', 'octubre', 'noviembre','diciembre'
    );

    foreach($meses as $mes) {
        if($mes == 'febrero')
            break;  #continue

        echo '<li>' . $mes . '</li>';
    }
?>
