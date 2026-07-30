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

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function saludar() {
        return "hola: " . $this->nombre . "<br>" .
               "tu apellido es: " . $this->apellido . "<br>" .
               "tu edad es: " . $this->edad . "<br>" .
               "tu correo es: " . $this->correo;
    }
}
?>