<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';
$idioma = isset($_POST['idioma']) ? $_POST['idioma'] : '';
$musica = isset($_POST['musica']) ? $_POST['musica'] : '';
$pasatiempos = isset($_POST['pasatiempo']) ? $_POST['pasatiempo'] : [];

$errores = [];

if ($nombre === '') {
    $errores[] = "Nombre";
} elseif (strlen($nombre) < 3 || strlen($nombre) > 20) {
    $errores[] = "<p style='color:red' Nombre debe tener entre 3 y 20 caracteres</p>";
}

if ($apellido === '') {
    $errores[] = "Apellido";
} elseif (strlen($apellido) < 3 || strlen($apellido) > 20) {
    $errores[] = "<p style='color:red' Apellido debe tener entre 3 y 20 caracteres.</p";
}

if (empty($correo)) {
    $errores[] = "Correo";
}
if ($comentarios === '') {
    $errores[] = "Comentarios";
} elseif (strlen($comentarios) < 5 || strlen($comentarios) > 50) {
    $errores[] = "<p style='color:red'> Comentarios debe tener entre 5 y 50 caracteres</p>";
}

if (preg_match('/[*.@\/]/', $comentarios)) {
    $errores[] = "<p style='color:red'> Comentarios no pueden contener los caracteres *, ., / o @</p>";
}

if (empty($idioma)) {
    $errores[] = "Idioma";
}

if (empty($musica)) {
    $errores[] = "Música";
}

if (empty($pasatiempos)) {
    $errores[] = "Pasatiempos";
}
if (empty($errores)) {
    // Mostrar todos los datos ingresados si no hay errores
    echo "Datos ingresados:<br>";
    echo "Nombre: $nombre<br>";
    echo "Apellido: $apellido<br>";
    echo "Correo: $correo<br>";
    echo "Comentarios: $comentarios<br>";
    echo "Idioma: $idioma<br>";
    echo "Música: $musica<br>";
    echo "Pasatiempos: " . (!empty($pasatiempos) ? implode(", ", $pasatiempos) : "Ninguno") . "<br>";
} else {
    // Mostrar los errores de campos faltantes
    echo "Faltan los siguientes campos por llenar:<br>";
    foreach ($errores as $error) {
        echo "- $error<br>";
    }
}
?>
