<?php
require 'funciones.php';
$fotos_por_pagina = 3;
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$conexion = conexion('galeria_practicar', 'root', '');

if (!$conexion) {
    die('Error en la BD');
}

#SQL_CALC_FOUND_ROWS calcula cuantos registros hay en total en la bd
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
    header('Location: index.php'); #error page
}

#FOUND_ROWS calcula cuantas filas encontro
$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

#ceil redondea hacia arriba
$total_paginas = ceil($total_post / $fotos_por_pagina);

include 'views/index.view.php';
