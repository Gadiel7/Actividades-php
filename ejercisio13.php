<?php
$archivo="prueba.txt";
echo (touch($archivo))?"archivo existe ":"archivo no existe";
$datos=fopen($archivo,'w');
echo "<br>";
//var_dump($datos);

if(touch($archivo)){
    $datos=fopen($archivo, "w");
    fwrite($datos, "Hoy es lunes\n");
    fwrite($datos, "Hoy es lunes de clases\n");
    fclose($datos);
}
$datos=fopen($archivo,'r');
while (!feof($datos)){
    $linea=fgets($datos, 1024);
    echo $linea. "<br>";
}
fclose($datos);
else{
    echo "Hay problemas";
}
?>