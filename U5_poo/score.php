
<?php 
    class Usuario {
        public $nombre;
        protected $correo;
        private $cod;
        
        function __construct($nombre, $correo) {
            $this->nombre = $nombre;
            $this->correo = $correo;
        }
        public function mostrarInfo() {
            return $this->correo;
        }
    }
    class Miembro extends Usuario {
        public function mostrarCorreo() {
            return 'Este es el correo: ' . $this->correo;
        }
    }
    
    $carlos = new Miembro('Carlos', 'carlos@gmail.com');
    echo $carlos->mostrarCorreo(); 
?>