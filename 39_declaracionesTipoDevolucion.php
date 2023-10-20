<?php 
    declare(strict_types=1);

    function obtenerEdad() :int { #devuelve int
        $numero = 30;
        return $numero;
    }

    $numero = 4; #sino envio un dato correcto no funciona

    echo 'Edad:' . obtenerEdad();
?>