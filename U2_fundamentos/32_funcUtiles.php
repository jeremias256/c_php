<?php
$texto = '< > & "" ';
$texto2 = 'hola';
echo $texto;
# convierte el texto en html para evitar inyecciones de cod
echo 'convierte el texto en html para evitar inyecciones de cod';
echo '<br>';
echo htmlspecialchars($texto);
echo '<br>';

echo '<p>hola</p>';
echo htmlspecialchars('<p>hola</p>');
echo '<br>';

# elimina espacios al comienzo y final de la variable
echo 'trim() elimina espacios al comienzo y final de la variable';
echo '<br>';
echo trim($texto);
echo '<br>';

# calcular el tam de un string
echo 'calcular el tam de un string';
echo strlen($texto);
echo '<br>';

# retorna un pedadazo de una line de un texto
echo 'retorna un pedadazo de una line de un texto';
echo '<br>';
echo substr($texto2, 0, 2); #var, desde, hasta

# texto a mayus o minus
echo strtoupper($texto2);
echo strtolower($texto2);

# saber la pos de la letra buscada
echo strpos($texto, 'h');
