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
            <div class="thumb">
                <a href="#">
                    <img alt="1" src="imagenes/1.jpg" />
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img alt="1" src="imagenes/2.jpg" />
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img alt="1" src="imagenes/3.jpg" />
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img alt="1" src="imagenes/4.jpg" />
                </a>
            </div>

            <div class="paginacion">
                <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página anterior</a>
                <a href="#" class="derecha"><i class="fa fa-long-arrow-right"></i> Página siguiente</a>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">Galeria creada Jeremias</p>
    </footer>
</body>

</html>