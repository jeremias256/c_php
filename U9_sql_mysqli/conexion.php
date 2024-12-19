<?php
try {
    $conexion = new mysqli('localhost', 'root', '', 'heidi_sql_curso', 3307);
    if ($conn->connect_error) {
        die("Conexión fallida");
    } else {
        echo "Conexión exitosa a la base de datos.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
