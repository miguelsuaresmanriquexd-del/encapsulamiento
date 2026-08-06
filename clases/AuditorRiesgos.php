<?php
require_once "persona.php";

class AuditorRiesgos extends persona {
    private $nivelAutorizacion;

    public function __construct($nombre, $apellido, $edad, $correo, $nivelAutorizacion) {
        parent::__construct($nombre, $apellido, $edad, $correo);
        $this->nivelAutorizacion = $nivelAutorizacion;
    }

    public function mostrarRol() {
        return "Auditoría Interna y Control de Riesgos - Autorización: {$this->nivelAutorizacion}";
    }
}
?>