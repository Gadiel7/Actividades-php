<?php
$usuario = $_GET['usuario'];
$contraseña=$_GET['contraseña'];
$repetir = $_GET['repetir'];
//calcular el tamaño del usuario
print(strlen($usuario));
echo "<br>";
var_dump($usuario);

echo "<br>";
//dividir una cadena
$cadena=explode("i", $usuario);
var_dump($cadena);

//comprobar si se repite
echo "<br>";
echo (strtoupper($repetir));
var_dump(strtolower($contraseña)==strtolower($repetir));

?>