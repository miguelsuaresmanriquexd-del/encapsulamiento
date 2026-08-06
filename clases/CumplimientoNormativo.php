<?php
require_once "persona.php";

class CumplimientoNormativo extends persona {
    
    private $normativa;

    public function __construct($nombre, $apellido, $edad, $correo,  $normativa) {
        parent::__construct($nombre, $apellido, $edad, $correo);
        
        $this->normativa = $normativa;
    }

    public function mostrarRol() {
        return "Cumplimiento Normativo - Marco: {$this->normativa}";
    }
}
?>