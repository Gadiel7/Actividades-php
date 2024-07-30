<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];
    $archivo = "datos_" . uniqid() . ".txt";
    if (touch($archivo)) {
        $datos = fopen($archivo, 'w');
        if ($datos) {
            fwrite($datos, "Nombre: $nombre\n");
            fwrite($datos, "Apellido: $apellido\n");
            fwrite($datos, "Carrera: $carrera\n");
            fclose($datos);
            echo "Los datos se han guardado correctamente en $archivo.";
        } else {
            echo "No se pudo abrir el archivo para escribir.";
        }
    } else {
        echo "No se pudo crear el archivo.";
    }
} else {
    echo "Solicitud inválida.";
}
?>
