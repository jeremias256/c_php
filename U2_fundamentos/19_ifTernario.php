<?php
    # isset(); Devuelve 1/0 si al variable fue seteada.
    # $edad = 20;
    $edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

    echo $edad;
?>