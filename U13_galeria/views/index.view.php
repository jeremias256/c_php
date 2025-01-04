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
            <h1 class="titulo">Mi galería en PHP y MySQL</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach ($fotos as $foto) : ?>
                <div class="thumb">
                    <a href="/curso-php/U13_galeria/foto.php?p=<?php echo $foto['id']; ?>">
                        <img alt="1" src="/curso-php/U13_galeria/fotos/<?php echo $foto['imagen']; ?>" />
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="paginacion">
                <?php if ($pagina_actual > 1): ?>
                    <a href="/curso-php/U13_galeria/index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página anterior</a>
                <?php endif; ?>

                <?php if ($total_paginas != $pagina_actual): ?>
                    <a href="/curso-php/U13_galeria/index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha"><i class="fa fa-long-arrow-right"></i> Página siguiente</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">Galeria creada Jeremias</p>
    </footer>
</body>

</html>