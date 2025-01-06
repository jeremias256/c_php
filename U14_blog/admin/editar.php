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
    $id = limpiar_datos($_POST['id']);
    $titulo = limpiar_datos($_POST['titulo']);
    $extracto = limpiar_datos($_POST['extracto']);
    $texto = limpiar_datos($_POST['texto']);
    $thumb_guardada = limpiar_datos($_POST['thumb-guardada']);
    $thumb = $_FILES['thumb'];

    if (empty($thumb['name'])) {
        $thumb = $thumb_guardada;
    } else {
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
        move_uploaded_file($thumb['tmp_name'], $archivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }

    $statement = $conexion->prepare('UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb WHERE id = :id');
    $statement->execute(array(
        ':id' => $id,
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $thumb
    ));

    header('Location: ' . RUTA . '/admin');
} else {
    $id_articulo = id_articulo($_GET['id']);
    if (empty($id_articulo)) {
        header('Location: ' . RUTA . '/admin');
    }

    $post = obtener_post_por_id($conexion, $id_articulo);
    if (!$post) {
        header('Location: ' . RUTA . '/admin');
    }

    $post = $post[0];
}

require '../views/editar.view.php';
