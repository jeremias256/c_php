<?php
require 'funciones.php';
$conexion = conexion('galeria_practicar', 'root', '');
if (!$conexion) {
    die('Error en la BD');
}

$id = isset($_GET['p']) ? (int)$_GET['p'] : false;
if (!$id) {
    header('Location: index.php');
}
$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$statement->execute(array(':id' => $id));
$foto = $statement->fetch();
if (!$foto) {
    header('Location: index.php');
}

require 'views/foto.view.php';
