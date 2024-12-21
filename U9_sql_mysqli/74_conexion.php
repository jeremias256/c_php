<?php
try {
    $conexion = new mysqli('localhost', 'root', '', 'heidi_sql_curso', 3307);
    if ($conexion->connect_error) {
        die("Conexión fallida");
    } else {
        echo "Conexión exitosa a la base de datos.";
        echo "<br>";
        $sql = 'SELECT * FROM usuario';
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows) {
            // echo '<pre>';
            // var_dump($resultado->fetch_assoc());
            // var_dump($resultado->fetch_assoc());
            // echo '</pre>';
            // echo $resultado->fetch_assoc()['nombre'];

            while ($fila = $resultado->fetch_assoc()) {
                echo $fila['nombre'];
                echo "<br>";
            }
        } else {
            echo "No hay registros";
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
