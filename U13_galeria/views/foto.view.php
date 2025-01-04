<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+13px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/812ac387af.js" crossorigin="anonymous"></script>
    <link href="/curso-php/U13_galeria/css/estilos.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto <?php echo !empty($foto['titulo']) ? $foto['titulo'] : $foto['imagen']; ?></h1>
        </div>
    </header>

    <div class="contenedor">
        <div class="foto">
            <img alt="img" src="/curso-php/U13_galeria/fotos/<?php echo $foto['imagen']; ?>" />
            <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus corrupti</p>
            <a class="regresar" href="index.php"><i class="fa fa-long-arrow-left"></i> Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">Galeria creada por Jeremias</p>
    </footer>
</body>

</html>