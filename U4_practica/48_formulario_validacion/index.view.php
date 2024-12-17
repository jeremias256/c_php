
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" crossorigin rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <input 
                class="form-control" 
                id="nombre" 
                name="nombre" 
                placeholder="nombre" 
                type="text" 
                value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>"
            >
            <input 
                class="form-control" 
                id="correo" 
                name="correo" 
                placeholder="correo" 
                type="text" 
                value="<?php if(!$enviado && isset($correo)) echo $correo ?>"
            >

            <textarea 
                class="form-control" 
                id="mensaje" 
                name="mensaje" 
                placeholder="mensaje"
            ><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores?>
                </div>
            <?php elseif($enviado):?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif ?>

            <button class="btn btn-primary" name="submit" type="submit">Enviar correo</button>
        </form>
    </div>
</body>
</html>