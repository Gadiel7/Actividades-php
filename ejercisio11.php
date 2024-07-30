<?php
// Lista de nombres de libros en el estante
$estante_libros = [
    "Caperucita roja",
    "El principito",
    "Gladiador",
    "El fin del mundo",
    "Santa Biblia Reyna valera",
    "El señor de los anillos",
    "Juan el pianista",
    "Los miserables"
];

function buscar_libro($nombre_libro, $estante_libros) {
    
    foreach ($estante_libros as $indice => $libro) {
        if ($libro == $nombre_libro) {
            return "El libro \"$libro\" se encontró en el estante en la posición " . ($indice + 1) . ".";
        }
    }
    return "El libro \"$nombre_libro\" no se encontró en el estante.";
}
$nombre_libro =$_GET['libro'];
$resultado = buscar_libro($nombre_libro, $estante_libros);
echo $resultado . "<br>";
$array_libros = $estante_libros;
echo "Array con los datos de los libros: " . implode(", ", $array_libros);
?>