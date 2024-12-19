<?php

# recomendado el metodo query si no se van a usar parametros

$id = $_GET['id'];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=heidi_sql_curso;port=3307', 'root', '');
    echo "Conexión exitosa a la base de datos.";
    echo "<br>";

    $resultados = $conexion->query("SELECT * FROM usuario WHERE id = $id ");
    # $resultados = $conexion->query('INSERT INTO  usuario values(null, "Pedro")');

    foreach ($resultados as $fila) {
        echo $fila['nombre'] . '<br/>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
