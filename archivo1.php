<?php
//verificacion de que un archivo existe
$carpeta="prueba/";
$archivo="ejercisio1.php";

echo (file_exists($carpeta.$archivo))?"archivo existente":"archivo no existente <br>";
echo (is_file($archivo))?"archivo existente ":"archivo no existe";
echo (is_dir($carpeta))?"carpeta existente":"carpeta no existe";
$archivo2="Diagrama de clases hotel.pnj";
if (file_exists($carpeta.$archivo2)){
    $size=filesize($carpeta.$archivo2);
    $kb=$size/2024;
    $mb=$kb/1024;
    $creado=filectime($carpeta.$archivo2);
    $creado_fecha=date("d/m/y H:i:s",$creado);
    $modificado=filemtime($carpeta.$archivo2);

    echo "Tamaño".$size."<br>";
    echo "Creado".$creado."<br>";
    echo "modificado".$modificado."<br>";
}
else{
 echo " no existe";
}
?>