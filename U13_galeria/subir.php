<?php
require 'funciones.php';
$conexion = conexion('galeria_practicar', 'root', '');
if (!$conexion) {
    header('Location: error.php');
    die();
}

// Obtener el número de elementos en la tabla
$statement = $conexion->prepare('SELECT COUNT(*) as total FROM fotos');
$statement->execute();
$total_fotos = $statement->fetch()['total'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if ($check !== false) {
        // Obtener la extensión del archivo
        $extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        // Asignar el nombre de la imagen como el número de elementos más uno y la extensión
        $nombre_imagen = ($total_fotos + 1) . '.' . $extension;

        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');
        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $nombre_imagen,
            ':texto' => $_POST['texto']
        ));
        header('Location: index.php');
    } else {
        $error = 'El archivo no es una imagen o el archivo es muy pesado';
    }
}

include 'views/subir.view.php';
