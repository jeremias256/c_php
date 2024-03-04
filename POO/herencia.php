
<?php 
    class Persona {
        public $nombre;
        public $edad;
        public $pais;

        function __construct($nombre, $edad, $pais) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pais = $pais;
        }

        public function mostrarInformacion($a = '', $b = '') {
            return $this->nombre . ' tiene ' . $this->edad . ' anios ' . ' y vive en ' . $this->pais;
        }
    }

    Class Estudiante extends Persona {
        #sobreescribir lo que necesitemos
        public $carrera;

        function __construct($nombre, $edad, $pais, $carrera) {
            parent::__construct($nombre, $edad, $pais);
            $this->carrera = $carrera;
        }
        public function mostrarInformacion($a = '', $b = '') {
            return $this->nombre . ' tiene ' . $this->edad . ' anios ' . ' y vive en ' . $this->pais . $this->carrera;
        }
    }

    // class Estudiante {
    //     public $nombre;
    //     public $edad;
    //     public $pais;
    //     public $carrera;

    //     function __construct($nombre, $edad, $pais, $carrera) {
    //         $this->nombre = $nombre;
    //         $this->edad = $edad;
    //         $this->pais = $pais;
    //         $this->carrera = $carrera;
    //     }

    //     public function mostrarInformacion($a = '', $b = '') {
    //         return $this->nombre . ' tiene ' . $this->edad . ' anios ' . ' y vive en ' . $this->pais;
    //     }
    // }

    $carlos = new Estudiante('Carlos Arturo', 23, 'Mexico', 'Desarrollador');
    echo $carlos->mostrarInformacion();
    echo $carlos->carrera;
?>