<?php 
    class Persona {
        static public $dia = '7de septiembre';
        function __construct() {}
        public static function saludo() {
            return 'Hola, Notion';
        }
    }

    //$carlos = new Persona;
    echo Persona::saludo();
?>