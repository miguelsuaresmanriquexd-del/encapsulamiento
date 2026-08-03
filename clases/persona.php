<?php
class persona {
    private $nombre;
    private $apellido;
    private $edad;
    private $correo;

    public function __construct($nombre, $apellido, $edad, $correo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->correo = $correo;
    }

    public function setName($nombre) {
        if (is_string($nombre)&& trim($nombre) !== ""){
            $this->nombre = $nombre;
        }
    }
    public function getName() {
        return $this->nombre;
    }

    public function setApellido($apellido) {
        if (is_string($apellido)&& trim($apellido) !== ""){
            $this->apellido = $apellido;
        }
    }
    public function getApellido() {
        return $this->apellido;
    }

    public function setEdad($edad) {
    if (is_numeric($edad) && $edad >= 10 && $edad <= 120  && trim($edad) !== "") {
        $this->edad = $edad;
        }else{
            echo "Edad no permitida crack";
        }
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setCorreo($correo) {
        if (is_string($correo)&& trim($correo) !== ""){
            $this->correo = $correo;
        }
    }
    public function getCorreo() {
        return $this->correo;
    }
}
?>