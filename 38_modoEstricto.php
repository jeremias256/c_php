<?php 
    declare(strict_types=1);

    function cuadrado(int $numero) {
        return $numero * $numero;
    }

    $numero = 4; #sino envio un dato correcto no funciona

    echo 'El cuadrado de' . $numero . 'es' . cuadrado($numero);
?>