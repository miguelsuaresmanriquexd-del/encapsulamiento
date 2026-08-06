<?php
require_once dirname(__DIR__) . '/clases/persona.php';
require_once dirname(__DIR__) . '/clases/Inversor.php';
require_once dirname(__DIR__) . '/clases/Administrador.php';
require_once dirname(__DIR__) . '/clases/AsesorFinanciero.php';
require_once dirname(__DIR__) . '/clases/AnalistaInversion.php';
require_once dirname(__DIR__) . '/clases/GestorFondos.php';
require_once dirname(__DIR__) . '/clases/AuditorRiesgos.php';
require_once dirname(__DIR__) . '/clases/MarketingInversionistas.php';
require_once dirname(__DIR__) . '/clases/CumplimientoNormativo.php';


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

$persona1->setEdad(17);
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
     
echo $persona1->setName(" ") . "</br>" ;
echo $persona1->setEdad(1) . "</br></br>";




$inversor = new Inversor("Andrés", "Gómez", 30, "andres@inversion.com",  5000.00);
echo $inversor->mostrarRol() . "<br>";

$admin = new Administrador("Elena", "Ruiz", 40, "elena@admin.com",  "Full Access");
echo $admin->mostrarRol() . "<br>";

$asesor = new AsesorFinanciero("Marcos", "Pérez", 35, "marcos@asesoria.com",  "Planificación Patrimonial");
echo $asesor->mostrarRol() . "<br>";

$analista = new AnalistaInversion("Sofia", "Castro", 28, "sofia@analisis.com",  "Renta Variable y Cripto");
echo $analista->mostrarRol() . "<br>";

$gestor = new GestorFondos("David", "López", 45, "david@fondos.com", "Cartera Tech Global");
echo $gestor->mostrarRol() . "<br>";

$auditor = new AuditorRiesgos("Lucía", "Torres", 38, "lucia@auditoria.com",  "Nivel Alto - Control de Fraude");
echo $auditor->mostrarRol() . "<br>";

$marketing = new MarketingInversionistas("Mateo", "Rojas", 27, "mateo@marketing.com", "Campaña Inversionistas Q3");
echo $marketing->mostrarRol() . "<br>";

$cumplimiento = new CumplimientoNormativo("Valeria", "Jiménez", 42, "valeria@compliance.com",  "ISO/AML Estándar Internacional");
echo $cumplimiento->mostrarRol() . "<br>";
?>