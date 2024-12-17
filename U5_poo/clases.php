
<?php 
    #EJ 1 
    $nombre = 'Carlos';
    $edad = 23;
    $pais = 'Mexico';

    # echo $nombre;
    # echo $edad;
    # echo $pais;

    #En una clase:
    #variables => propiedades
    #funciones => metodos
    class Persona {
        public $nombre; #propiedades
        public $edad;
        public $pais;

        function __construct($nombre, $edad, $pais) { #metodo constructor
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pais = $pais;
        }

        public function mostrarInformacion($a, $b) { #metodo
            echo $this->nombre . ' tiene ' . $this->edad . ' anios ' . ' y vive en ' . $this->pais;
            echo $a . $b;
        }
    }

    // $carlos = new Persona;
    // $carlos->nombre = 'Carlos';
    // $carlos->edad = 23;
    // $carlos->pais = 'Mexico';

    // echo $carlos->mostrarInformacion() . ' soy' . $carlos->nombre . ' vivo en ' . $pais;

    // $carlos = new Persona;
    // $carlos->nombre = 'Alex';
    // $carlos->edad = 32;
    // $carlos->pais = 'Argentina';
    // $carlos->mostrarInformacion();

    echo '<br/>';

    $jeremias = new Persona('Gabriel', 30, 'Buenos Aires');
    $jeremias->mostrarInformacion('parametro1', 'parametro2');

?>