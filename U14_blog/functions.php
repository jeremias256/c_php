<?php

function conexion($bd_config)
{
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'] . ';port=3307', $bd_config['usuario'], $bd_config['password']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiar_datos($datos)
{
    $datos = trim($datos); #limpiar espacios en blanco atras y adelante
    $datos = stripslashes($datos); #limpiar barras invertidas " / "
    $datos = htmlspecialchars($datos); #limpiar caracteres especiales
    return $datos;
}

function obtener_post($post_por_pagina, $conexion)
{
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function numero_paginas($post_por_pagina, $conexion)
{
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas;
}

function pagina_actual()
{
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function id_articulo($id)
{
    return (int)limpiar_datos($id);
}

function obtener_post_por_id($conexion, $id)
{
    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha)
{
    $timestamp = strtotime($fecha);
    $meses  = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    $fecha = "$dia de " . $meses[$mes] . " del $year";
    return $fecha;
}

function comprobar_sesion()
{
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . RUTA);
    }
}
