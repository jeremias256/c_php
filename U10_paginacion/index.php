<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion;port=3307', 'root', '');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$articulo_por_pagina = 3;

$inicio = ($pagina > 1) ? ($pagina * $articulo_por_pagina - $articulo_por_pagina) : 0;

$articulos = $conexion->prepare("
    SELECT SQL_CALC_FOUND_ROWS * FROM articulo 
    LIMIT $inicio, $articulo_por_pagina
");

$articulos->execute();
$articulos = $articulos->fetchAll();

# print_r($articulos);

if (!$articulos) {
    header('Location: index.php');
}

$total_articulos = $conexion->query('SELECT FOUND_ROWS() as total');
$total_articulos = $total_articulos->fetch()['total'];

#echo $total_articulos;

$numero_paginas = ceil($total_articulos / $articulo_por_pagina);

include 'index.view.php';
