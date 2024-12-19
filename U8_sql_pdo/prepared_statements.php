<?php

if ($_GET['id']) {
    $param = $_GET['id'];
} else {
    $param = 2;
}

try {
    $conexion = new PDO('mysql:host=localhost;dbname=heidi_sql_curso;port=3307', 'root', '');
    echo "Conexión exitosa a la base de datos.";
    echo "<br>";

    $statement = $conexion->prepare('SELECT * FROM usuario WHERE id = :id or :id2');
    $statement->execute(array(':id' => $param, ':id2' => 1));

    # $resultados = $statement->fetch();
    #$resultados = $statement->fetchAll();

    $resultados = $statement->fetchAll();
    foreach ($resultados as $usuario) {
        echo $usuario['nombre'] . '<br/>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
