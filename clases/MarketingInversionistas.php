<?php
require_once "persona.php";

class MarketingInversionistas extends persona {
    
    private $campanaActiva;

    public function __construct($nombre, $apellido, $edad, $correo,  $campanaActiva) {
        parent::__construct($nombre, $apellido, $edad, $correo);
       
        $this->campanaActiva = $campanaActiva;
    }

    public function mostrarRol() {
        return "Marketing y Relaciones con Inversionistas  - Campaña: {$this->campanaActiva}";
    }
}
?>