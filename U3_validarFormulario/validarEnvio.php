<?php

    # SI SOLO TENGO UN FORMULARIO 
    if($_SERVER['REQUEST_METHOD'] == 'GET')
        echo 'Se envio el form por GET';
    else
        echo 'Se envio el form por POST';

    echo '<br/>';

    # Esta OPCION ES MEJOR EN CASO QUE TENGAMOS MAS DE 1 FORMULARIO
    if(isset($_POST['submit-formulario2'])) {
        echo 'Se han enviado los datos correctamente';
        print_r($_POST['submit']);
    }
    
?>