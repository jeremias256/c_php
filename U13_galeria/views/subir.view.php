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
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="post" enctype="multipart/form-data">
            <label for="foto">Seleccioná tu foto</label>
            <input id="foto" name="foto" type="file" />

            <label for="titulo">Titulo de la foto</label>
            <input id="titulo" name="titulo" type="text" />

            <label for="texto">Descripción:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

            <button class="submit" type="submit">Subir Foto</button>
        </form>
    </div>

    <footer>
        <p class="copyright">Galeria creada Jeremias</p>
    </footer>
</body>

</html>