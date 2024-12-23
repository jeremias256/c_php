<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/812ac387af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/curso-php/U11_login_registro/css/style.css">
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Registro</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="POST" name="registro">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input class="usuario" name="usuario" placeholder="Usuario" type="text">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input class="password" name="password" placeholder="Contrasena" type="password">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input class="password_btn" name="password2" placeholder="Repetir contrasena" type="password"><i class="submit-btn fa fa-arrow-right" onClick="registro.submit()"></i>
            </div>

            <?php if (!empty($errores)) : ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>

        <p class="texto-registrate">
            ¿Ya tenés cuenta?
            <a href="login.php">Iniciar Sesion</a>
        </p>

    </div>
</body>

</html>