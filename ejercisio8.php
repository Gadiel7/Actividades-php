<?php
$competidores = [
    "nombre1" => "Juan Perez", "hora_llegada1" => "12:02:00",
    "nombre2" => "Pedro Blacutt", "hora_llegada2" => "12:05:00",
    "nombre3" => "Jose carlos", "hora_llegada3" => "12:08:00",
    "nombre4" => "Jose Duran", "hora_llegada4" => "12:01:00",
    "nombre5" => "Carlos meldrano", "hora_llegada5" => "12:07:00",
    "nombre6" => "Miguel Villa", "hora_llegada6" => "12:10:00",
    "nombre7" => "Ismael Roca", "hora_llegada7" => "12:15:00",
    "nombre8" => "Leonardo Vilca", "hora_llegada8" => "12:20:00",
    "nombre9" => "Tomy Shelby", "hora_llegada9" => "12:21:00",
    "nombre10" => "Dante Arias", "hora_llegada10" => "12:25:00"
];

echo "<pre>";
var_dump($competidores);
echo "</pre>";
echo "La diferencia entre el corredor que quedo segundo es: ",$competidores['hora_llegada2'],  " ", $competidores['nombre2'] ;
echo "<br>";
echo "Y el corredor primero gano con el timepo de: ",$competidores['hora_llegada1'], " ", $competidores['nombre1'] ;
echo "<br>";
echo "<br>";
echo "El ultimo en llegar a la carrera fue: ",$competidores['hora_llegada10'],  " ", $competidores['nombre10'] ;
echo "<br>";
echo "<br>";
echo "Los 3 primeros en llegar son: ",$competidores['hora_llegada1'],  " ", $competidores['nombre1'] ," con el primer lugar es:", $competidores['hora_llegada2'],  " ", $competidores['nombre3'], " con el segundo lugar es:", $competidores['hora_llegada3'],  " ", $competidores['nombre3'], " con el tercer lugar ";
?>