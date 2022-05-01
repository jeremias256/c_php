<?php
    $semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
    $arreglo = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
    $arreglo2 = array('cadenas de chars',true,4, array('array dentro array'));


    $semana[10] = 'Jeremias';

    echo $semana[0] . '<br/>'; 
    echo $semana[1] . '<br/>';
    echo $semana[10] . '<br/>';
?>