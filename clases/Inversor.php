<?php
require_once "persona.php";

class Inversor extends persona {
    
    private $saldoDisponible;

    public function __construct($nombre, $apellido, $edad, $correo, $saldoDisponible) {
        parent::__construct($nombre, $apellido, $edad, $correo);
        
        $this->saldoDisponible = $saldoDisponible;
    }

    public function mostrarRol() {
        return "Inversionista - Saldo líquido: $" . $this->saldoDisponible;
    }
}
?>