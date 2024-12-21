<?php
try {
    $conexion = new mysqli('localhost', 'root', '', 'heidi_sql_curso', 3307);
    if ($conexion->connect_error) {
        die("Conexión fallida");
    } else {
        $statement = $conexion->prepare("INSERT INTO usuario(id, nombre, edad) VALUES(?, ?, ?)");
        // ? = placeholder
        // s = string
        // i = integer
        // d = double
        $statement->bind_param('sss', $id, $nombre, $edad);
        $id = null;
        if (isset($_GET['nombre']) && isset($_GET['edad'])) {
            $nombre = $_GET['nombre'];
            $edad = $_GET['edad'];
        }

        $statement->execute();
        echo 'Filas agregadas' . $conexion->affected_rows;
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
