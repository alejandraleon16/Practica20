<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$correo = $_GET['correo'];
$contrasena = $_GET['pass'];

echo "Hola " . $nombre . " " . $apellido;
echo "<br>";
echo $correo;
echo "<br>";
echo $contrasena;

?>