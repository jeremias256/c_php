<?php
session_start();
require 'config.php';
require '../functions.php';

comprobar_sesion();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiar_datos($_POST['titulo']);
    $extracto = limpiar_datos($_POST['extracto']);
    $texto = limpiar_datos($_POST['texto']);
    $thumb = $_FILES['thumb']['tmp_name'];

    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $archivo_subido); #muevo de la pc del usuario al servidor la imagen

    $statement = $conexion->prepare('INSERT INTO articulos (id, titulo, extracto, texto, thumb) VALUES (null, :titulo, :extracto, :texto, :thumb)');
    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: ' . RUTA . '/admin');
}

require '../views/nuevo.view.php';
