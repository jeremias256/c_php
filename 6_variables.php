<?php
    //? string
    $nombre = 'Carlos'; // ''   !=  ""
    //? int
    $numero = 322;
    //? double
    $numero_decimal = 322.322;
    //? boolean
    $verdadero = true;
    //! array
    //! object
    //! class
    //! null

    echo $nombre;
    echo $numero;
    echo $numero_decimal;
    echo "hola sol $nombre"; // permite usar variables
    echo 'hola sol $nombre';
    echo 'hola sol ' . $nombre;

    echo gettype($nombre);
    echo gettype($numero);
    echo gettype($verdadero);
?>