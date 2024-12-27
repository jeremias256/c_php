<?php

function conexion($tabla, $usuario, $pass)
{
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$tabla;port=3307", $usuario, $pass);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}
