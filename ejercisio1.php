<?php
/*$nombre="Gadiel";
$talla=1.79;
$peso =90;
$musica=array("Santo es el que vive", "Es el poderoso de israel");
$bandera=true;

print("nombre: " . $nombre . "<br>");
print("Talla: " . $talla . "<br>");
print("Peso: " . $peso . "<br>");
var_dump($musica);
print("Bandera: " . $bandera . "<br>");*/

/*operadores */
$a=$_GET['a'];
$b=$_GET['b'];
echo ("el resultado de la suma es: ".$a+$b. "<br>");
echo ("el resultado de la resta es: ".$a-$b. "<br>");
echo ("el resultado de la multiplicacion es: ".$a*$b. "<br>");
echo ("el resultado de la division es: ".$a%$b. "<br>");

/* Comparativos */
var_dump($a>$b);
echo "<br>";
var_dump($a<$b);
echo "<br>";
var_dump($a<=$b);
echo "<br>";
var_dump($a>=$b);
echo "<br>";
var_dump($a==$b);
echo "<br>";
var_dump($a<=>$b);
echo "<br>";

?>
