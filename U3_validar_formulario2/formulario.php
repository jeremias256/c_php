
<?php
    $errores = '';

    if(isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
    }

    if(!empty($nombre)) {
        # $nombre = trim($nombre);
        # $nombre = htmlspecialchars($nombre);
        # $nombre = stripslashes($nombre);
        $nombre = htmlspecialchars($nombre);
        echo "You are: $nombre <br/>";
    }else {
        $errores .= 'Por favor agrega un nombre <br/>';
    }

    if(!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo valido';
        }
        echo "Tu correo es : $correo";
    }else {
        $errores .= 'Por favor agrega un correo';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input name="nombre" placeholder="Nombre" type="text">
        <input name="correo" placeholder="Correo" type="text">

        <?php if(!empty($errores)):?>
            <div class="error"> <?php echo $errores; ?> </div>
        <?php endif; ?>

        <input name="submit" type="submit">
    </form>
</body>
</html>