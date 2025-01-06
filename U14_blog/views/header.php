<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Jeremias</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/812ac387af.js" crossorigin="anonymous"></script>
    <link href="<?php echo RUTA; ?>/css/estilos.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA ?>">Mi blog</a></p>
            </div>

            <div class="derecha">
                <form action="<?php echo RUTA; ?>/buscar.php" class="buscar" method="GET" name="busqueda">
                    <input class="busqueda" name="busqueda" placeholder="Buscar" type="text">
                    <button class="icono fa fa-search" type="submit"></button>
                </form>

                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>