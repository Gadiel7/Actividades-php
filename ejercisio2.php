<?php

// Obtener valores desde la URL
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];

$array1 = array($n1,$n2,$n3);

echo ("Array de numeros)"."<br>");

echo ("El primero es mayor al segundo ". var_dump($n1 > $n2)."<br>");
echo ("El primero es menor al segundo ".var_dump($n1 < $n2)."<br>");
echo ("El primero es igual al segundo ".var_dump($n1 == $n2)."<br>");

echo "<hr>";

echo ("El primero es mayor al tercero ". var_dump($n1 > $n3)."<br>");
echo ("El primero es menor al tercero ".var_dump($n1 < $n3)."<br>");
echo ("El primero es igual al tercero ".var_dump($n1 == $n3)."<br>");

echo "<hr>";

echo ("El segundo es mayor al tercero ". var_dump($n2 > $n3)."<br>");
echo ("El segundo es menor al tercero ".var_dump($n2 < $n3)."<br>");
echo ("El segundo es igual al tercero ".var_dump($n2 == $n3)."<br>");

echo "<hr>";

$l1 = $_GET['l1'];
$l2 = $_GET['l2'];
$l3 = $_GET['l3'];

$array2 = array($l1,$l2,$l3);

echo ("Array de letras)"."<br>");

var_dump($array2);

?>