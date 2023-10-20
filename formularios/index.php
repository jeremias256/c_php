
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <form action="recibe.php" method="get">
        <!-- <form action="recibe.php" method="post"> METHOD POST -->
        <input name="nombre" placeholder="Nombre:" type="text">

        <br/>

        <label for="hombre">Hombre</label>
        <input id="hombre" name="sexo" type="radio" value="hombre">
        
        <label for="mujer">Mujer</label>
        <input id="mujer" name="sexo" type="radio" value="hombre">

        <br/>

        <select id="year" name="year">
        <?php 
            for($i = 1960; $i <= 2023 ; $i++)
            {
                echo "<option value=\"$i\">$i</option>";
            }
        ?>
        </select>

        <button type="submit">Enviar<button/>
    </form>
</body>
</html>