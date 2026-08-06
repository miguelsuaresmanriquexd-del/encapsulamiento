<?php
require_once "persona.php";

class AsesorFinanciero extends persona {

    private $especialidad;

    public function __construct($nombre, $apellido, $edad, $correo,$especialidad) {
        parent::__construct($nombre, $apellido, $edad, $correo);
        $this->especialidad = $especialidad;
    }

    public function mostrarRol() {
        return "Usuario Asesor Financiero - Especialidad: {$this->especialidad}";
    }
}
?>