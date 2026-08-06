<?php
require_once "persona.php";

class Administrador extends persona {
    private $nivelAcceso;

    public function __construct($nombre, $apellido, $edad, $correo,$nivelAcceso) {
        parent::__construct($nombre, $apellido, $edad, $correo);
        $this->nivelAcceso = $nivelAcceso;
    }

    public function mostrarRol() {
        return "Usuario Administrador - Nivel de acceso: {$this->nivelAcceso}";
    }
}
?>