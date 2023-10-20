<?php

/* ------------------------------- METODO POST ------------------------------ */
#print_r($_POST); 
#if(!$_POST) 
#    header('Location: http://localhost/curso-php/formularios/');

#$nombre   = $_POST['nombre'];
#$sexo     = $_POST['sexo'];
#$year     = $_POST['year'];
#echo 'Eres ' . $nombre . 'tu sexo es ' . $sexo . 'tu edad es ' . $year;

/* ------------------------------- METODO GET ------------------------------- */
if(!$_GET)
    header('Location: http://localhost/curso-php/formularios/');

$nombre = $_GET['nombre'];
$sexo     = $_GET['sexo'];
$year     = $_GET['year'];

echo htmlspecialchars($nombre) . '<br/>';
echo htmlspecialchars($sexo) . '<br/>';
echo htmlspecialchars($year) . '<br/>';
?>