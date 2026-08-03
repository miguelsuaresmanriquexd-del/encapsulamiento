<?php
require_once dirname(__DIR__) . '/clases/persona.php';

$persona1 = new persona("Carlos", "José", 26, "carlos@mail.com");
echo "hola: " . $persona1->getName() . "<br>" .
     "tu apellido es: " . $persona1->getApellido() . "<br>" .
     "tu edad es: " . $persona1->getEdad() . "<br>" .
     "tu correo es: " . $persona1->getCorreo() . "<br><br>";

$persona2 = new persona("Carla", "María", 29, "carla@mail.com");
echo "hola: " . $persona2->getName() . "<br>" .
     "tu apellido es: " . $persona2->getApellido() . "<br>" .
     "tu edad es: " . $persona2->getEdad() . "<br>" .
     "tu correo es: " . $persona2->getCorreo() . "<br><br>";

$persona3 = new persona("Laura", "Hernández", 23, "laura@mail.com");
echo "hola: " . $persona3->getName() . "<br>" .
     "tu apellido es: " . $persona3->getApellido() . "<br>" .
     "tu edad es: " . $persona3->getEdad() . "<br>" .
     "tu correo es: " . $persona3->getCorreo() . "<br><br>";

$persona1->setName("Carlos Mario");
$persona1->setEdad(35);
echo "Cambios válidos persona 1:<br>" .
     "hola: " . $persona1->getName() . "<br>" .
     "tu apellido es: " . $persona1->getApellido() . "<br>" .
     "tu edad es: " . $persona1->getEdad() . "<br>" .
     "tu correo es: " . $persona1->getCorreo() . "<br><br>";

$persona1->setEdad(15);
$persona2->setName("");
$persona3->setCorreo("correoInvalido");
$persona2->setApellido("María123");

echo "Prueba de datos incorrectos:<br>";
echo "hola: " . $persona1->getName() . "<br>" .
     "tu apellido es: " . $persona1->getApellido() . "<br>" .
     "tu edad es: " . $persona1->getEdad() . "<br>" .
     "tu correo es: " . $persona1->getCorreo() . "<br><br>";

echo "hola: " . $persona2->getName() . "<br>" .
     "tu apellido es: " . $persona2->getApellido() . "<br>" .
     "tu edad es: " . $persona2->getEdad() . "<br>" .
     "tu correo es: " . $persona2->getCorreo() . "<br><br>";

echo "hola: " . $persona3->getName() . "<br>" .
     "tu apellido es: " . $persona3->getApellido() . "<br>" .
     "tu edad es: " . $persona3->getEdad() . "<br>" .
     "tu correo es: " . $persona3->getCorreo() . "<br>";
?>