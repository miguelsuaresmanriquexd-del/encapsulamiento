<?php
require_once "persona.php";

class GestorFondos extends persona {
    
    private $carteraAsignada;

    public function __construct($nombre, $apellido, $edad, $correo,  $carteraAsignada) {
        parent::__construct($nombre, $apellido, $edad, $correo);
        
        $this->carteraAsignada = $carteraAsignada;
    }

    public function mostrarRol() {
        return "Usuario Gestor de Fondos  - Cartera: {$this->carteraAsignada}";
    }
}
?>