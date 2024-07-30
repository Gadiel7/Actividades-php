<?php
$cliente="juan perez";
//saber el tamaño de la cadena
print(strlen($cliente));
echo "<br>";
var_dump($cliente);
//para limpiar espacios en blanco
$texto="juan Perez";
var_dump($texto);
$texto2=strlen(trim($texto));
echo $texto2."<br>";
//convertir mayusculas y minusculas
echo (strtolower($cliente));
echo "<br>";
echo (strtoupper($texto));
var_dump(strtolower($cliente)==strtolower($texto));
//reemplazar
echo "<br>";
echo str_replace("Juan", "jose", $cliente);
//Buscar posicion 
echo "<br>";
echo strpos($cliente, "Pedro");
//Buscar
echo substr_count($cliente,"e");
//dividir una cadena
$cadena=explode("e", $texto);
var_dump($cadena);
//unir cadena
echo "<br>";
$cadena = implode("e", $cadena);
var_dump($cadena);
?>