<?php
function suma($a, $b)
{
    return $a + $b;
}

require 'vista.php';
include 'vista2.php'; # no bloquea

echo '<h2>REQUIRE SI BLOQUEA</h2>';
echo '<h2>INCLUDE no bloquea el resto del cod si no encuentra el cod</h2>';
