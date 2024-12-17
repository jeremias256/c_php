<?php 
    abstract class Persona {
        public function saludo() {
            return 'Hola Notion';
        }
    }

    class Estudiante extends Persona {
        function __construct(){}
    }

    $carlos = new Estudiante();
    echo $carlos->saludo();
?>