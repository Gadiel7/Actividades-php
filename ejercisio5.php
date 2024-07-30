<?php
//array de una dimension
$platos=array("sopa de mani", "hamburguesa", "piquemacho");
$platos=["milanesa napolitana", "lasaña", "salteña"];

echo "<pre>";
var_dump($platos);
echo "</pre>";
//insertar datos
$platos[2]="Nuevo plato";   
$platos[3]="salteña"; 
echo "<pre>";
var_dump($platos);
echo "</pre>";
//insertar al inicio
array_unshift($platos, "licuados");
echo "<pre>";
var_dump($platos);
echo "</pre>";
//insertar al final
array_push($platos, "ensaladas");
echo "<pre>";
var_dump($platos);
echo "</pre>";
//array de dos dimensiones
$electrodomesticos=[ 
    "nombre"=>"televisor", 
    "modelo"=>"SAMSUNG", 
    "precio"=>1000, 
    "pulgadas"=>55, 
    "procedencia"=>"Europa",
    "accesorios"=>[
        "game"=>"si",
        "smart"=>"si",
        "control"=>"si",

    ]
];
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
//para imprimir el precio
echo $electrodomesticos["nombre"]."<br>". 
$electrodomesticos["precio"]. "<br>".
$electrodomesticos["accesorios"]["smart"];
//insertar accesorio dentro de un array a otro
$electrodomesticos ["accesorios"]["USB"]="si";
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
//manejar los indices
$clientes=[];
var_dump(empty($platos));
var_dump(empty($electrodomesticos));
//pregunta si todo el array esta vacio o no, en este caso esta vacio
var_dump(empty($clientes));
//pregunta si fue declarado en todo el codigo $clientes
var_dump(isset($clientes));
var_dump(isset($electrodomesticos["procedencia"]));
//ordenar menor a mayos de una sola dimension
sort($platos);
echo "<pre>";
var_dump($platos);
echo "</pre>";
//ordenar de mayor a menor
rsort($platos);
echo "<pre>";
var_dump($platos);
echo "</pre>";
//ordenar array dos dimensiones valores de acuerdo al orden alfabetico
asort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
//ordenar array dos dimensiones valores de acuerdo al orden alfabetico ascendente
asort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
//ordenar array dos dimensiones valores de acuerdo al orden alfabetico descendente
arsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
//ordenar array dos dimensiones valores de acuerdo al orden alfabetico ascendente
ksort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
//ordenar array dos dimensiones valores de acuerdo al orden alfabetico descendente
krsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
?>