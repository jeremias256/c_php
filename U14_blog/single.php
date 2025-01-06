<?php
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if (!$conexion) {
    header('Location: error.php');
}

if (empty($id_articulo)) {
    header('Location: ' . RUTA);
}

$post = obtener_post_por_id($conexion, $id_articulo);

if (!$post) {
    header('Location: ' . RUTA);
}

$post = $post[0];

require 'views/single.view.php';
