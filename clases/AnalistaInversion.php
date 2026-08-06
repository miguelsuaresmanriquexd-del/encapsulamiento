<?php
require_once "persona.php";

class AnalistaInversion extends persona {
    private $mercadoObjetivo;

    public function __construct($nombre, $apellido, $edad, $correo,  $mercadoObjetivo) {
        parent::__construct($nombre, $apellido, $edad, $correo);
        $this->mercadoObjetivo = $mercadoObjetivo;
    }

    public function mostrarRol() {
        return "Usuario Analista de Inversión - Mercado: {$this->mercadoObjetivo}";
    }
}
?>