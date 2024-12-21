<?php
try {
    $conexion = new mysqli('localhost', 'root', '', 'heidi_sql_curso', 3307);
    if ($conexion->connect_error) {
        die("Conexión fallida");
    } else {
        $sql = "INSERT INTO usuario(id, nombre, edad) VALUES(null, 'ROBIN', 30)";
        $resultado = $conexion->query($sql);

        if ($conexion->affected_rows >= 1) {
            echo 'Filas agregadas' . $conexion->affected_rows;
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
