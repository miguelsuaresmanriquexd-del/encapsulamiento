<?php
require_once dirname(__DIR__) . '/clases/persona.php';

$persona1 = new persona("Carlos", "José", 26, "carlos@mail.com");
echo $persona1->saludar() . "<br><br>";

$persona2 = new persona("Carla", "María", 29, "carla@mail.com");
echo $persona2->saludar() . "<br><br>";

$persona3 = new persona("Laura", "Hernández", 23, "laura@mail.com");
echo $persona3->saludar() . "<br><br>";

$persona1->setName("Carlos Mario");
$persona1->setEdad(35);
echo "Cambios válidos persona 1:<br>" . $persona1->saludar() . "<br><br>";

$persona1->setEdad(-5);
$persona2->setName("");
$persona3->setCorreo("correoInvalido");
$persona2->setApellido("María123");

echo "Prueba de datos incorrectos:<br>";
echo $persona1->saludar() . "<br><br>";
echo $persona2->saludar() . "<br><br>";
echo $persona3->saludar() . "<br>";
?>