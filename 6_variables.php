<?php
    # string
    $nombre = 'Carlos'; // ''   !=  ""
    # int
    $numero = 322;
    # double
    $numero_decimal = 322.322;
    # boolean
    $verdadero = true;

    # Array
    # Object
    # Class
    # Null
?>

<?php echo $nombre; ?>
<br>
<?php echo $numero; ?>
<br>
<?php echo $numero_decimal; ?>
<br>
<?php 
    echo "hola sol $nombre";    # permite usar variables
    echo 'hola sol $nombre';    # no permite
    echo 'hola sol ' . $nombre; # concatenar en php .
?>
<br>
<?php 
    echo gettype($nombre);
    echo gettype($numero);
    echo gettype($verdadero);
?>
