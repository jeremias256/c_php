<?php
// print_r($_POST);
if ($_POST) {
    $nombre   = $_POST['nombre'];
    $sexo     = $_POST['sexo'];
    $year     = $_POST['year'];
    echo 'Eres ' . $nombre . 'tu sexo es ' . $sexo . 'tu edad es ' . $year;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <!--RUTA ACTUAL DEL DOC QUE SE EJECUTA-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <!-- <form action="index.php" method="post">  SE AUTO ENVIA-->
        <!-- <form action="recibe.php" method="get">  METHOD POST recibe.php -->
        <!-- <form action="recibe.php" method="post"> METHOD POST recibe.php -->
        <input name="nombre" placeholder="Nombre:" type="text">

        <br />

        <label for="hombre">Hombre</label>
        <input id="hombre" name="sexo" type="radio" value="hombre">

        <label for="mujer">Mujer</label>
        <input id="mujer" name="sexo" type="radio" value="hombre">

        <br />

        <select id="year" name="year">
            <?php
            for ($i = 1960; $i <= 2023; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>