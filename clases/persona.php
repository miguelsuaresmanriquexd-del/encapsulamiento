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
        $this->nombre = $nombre;
    }
    public function getName() {
        return $this->nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function getApellido() {
        return $this->apellido;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    public function getEdad() {
        return $this->edad;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }
    public function getCorreo() {
        return $this->correo;
    }
}
?>