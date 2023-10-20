<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <form action="validarEnvio.php" method="post">
        <input name="nombre" placeholder="Nombre:" type="text">

        <br/>

        <label for="hombre">Hombre</label>
        <input id="hombre" name="sexo" type="radio" value="hombre">
        
        <label for="mujer">Mujer</label>
        <input id="mujer" name="sexo" type="radio" value="hombre">

        <button name="submit-formulario1" type="submit">Enviar<button/>
    </form>
    
    <br/>

    <form action="validarEnvio.php" method="post">
        <input name="nombre" placeholder="Nombre:" type="text">

        <br/>

        <label for="hombre">Hombre</label>
        <input id="hombre" name="sexo" type="radio" value="hombre">
        
        <label for="mujer">Mujer</label>
        <input id="mujer" name="sexo" type="radio" value="hombre">

        <button name="submit-formulario2" type="submit">Enviar<button/>
    </form>
</body>
</html>