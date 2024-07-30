<?php
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
$correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
$comentario = isset($_POST["comentario"]) ? $_POST["comentario"] : "";
$idioma = isset($_POST["idioma"]) ? $_POST["idioma"] : "";
$musica = isset($_POST["musica"]) ? $_POST["musica"] : "";
$pasatiempo = isset($_POST["pasatiempo"]) ? $_POST["pasatiempo"] : [];

$arrayValues = ["nombre" => $nombre, "apellido" => $apellido, "correo" => $correo, "comentario" => $comentario, "idioma" => $idioma, "musica" => $musica, "pasatiempo" => $pasatiempo];
$errores = [];

foreach ($arrayValues as $key => $value) {
    if (empty($value)) {
        $errores[$key][] = "El campo $key es requerido.";
    }
}

if ((strlen($nombre) < 3 || strlen($nombre) > 20) && !empty($nombre)) {
    $errores['nombre'][] = "El nombre debe tener al menos 3 y como máximo 20 caracteres.";
}

if ((strlen($apellido) < 3 || strlen($apellido) > 20) && !empty($apellido)) {
    $errores['apellido'][] = "El apellido debe tener al menos 3 y como máximo 20 caracteres.";
}

if ((strlen($comentario) < 5 || strlen($comentario) > 50) && !empty($comentario)) {
    $errores['comentario'][] = "El comentario debe tener entre 5 y 50 caracteres.";
}

$invalidCharacters = ["@", ".", "|", "*"];
foreach ($invalidCharacters as $char) {
    if (strpos($comentario, $char) !== false) {
        $errores['comentario'][] = "El comentario no puede contener los caracteres @, ., |, $.";
        break;
    }
}
/* 
if (count($errores) > 0) {
    // Mostrar el formulario nuevamente con errores
} else {
    echo "<h1>BIENVENIDO</h1>";
    echo "Nombre: $nombre<br>";
    echo "Apellido: $apellido<br>";
    echo "Correo: $correo<br>";
    echo "Comentario: $comentario<br>";
    echo "Idioma: $idioma<br>";
    echo "Música: $musica<br>";
    echo "Pasatiempos: ";
    echo "<ul>";
    foreach ($pasatiempo as $p) {
        echo "<li>$p</li> ";
    }
    echo "</ul>";
} */

$idiomas = [
    "Español",
    "English",
    "Français",
    "Aleman",
    "Italiano",
    "Portugues"
];

$musica = [
    "Rock",
    "Pop",
    "Jazz",
    "Clasica",
    "Reggae",
    "Salsa",
];

$pasatiempo = [
    "Fútbol",
    "Tenis",
    "Natación"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div>
        <form method="POST" action="">
            <h1 align="center">FORMULARIO</h1>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class=<?php echo isset($errores['nombre']) && isset($_POST['submit']) ? "error" : ""; ?>>
            <?php if (isset($errores['nombre']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['nombre'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class=<?php echo isset($errores['apellido']) && isset($_POST['submit']) ? "error" : ""; ?>>
            <?php if (isset($errores['apellido']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['apellido'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" class=<?php echo isset($errores['correo']) && isset($_POST['submit']) ? "error" : ""; ?>>
            <?php if (isset($errores['correo']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['correo'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="comentario">Comentario:</label>
            <textarea name="comentario" id="comentario" rows="4" cols="30" class=<?php echo isset($errores['comentario']) && isset($_POST['submit']) ? "error" : ""; ?>></textarea>
            <?php if (isset($errores['comentario']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['comentario'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="idioma">Idioma:</label>
            <select name="idioma" id="idioma" class=<?php echo isset($errores['idioma']) && isset($_POST['submit']) ? "error" : ""; ?>>
                <option value="">Seleccione un idioma</option>
                <?php foreach ($idiomas as $idioma) : ?>
                    <option value="<?php echo $idioma; ?>"><?php echo $idioma; ?></option>
                <?php endforeach; ?>
            </select>

            <?php if (isset($errores['idioma']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['idioma'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="musica">Música:</label>

            <?php foreach ($musica as $m) : ?>
                <div class="form-group">
                    <?php echo $m; ?>
                    <input type="radio" name="musica" value="<?php echo $m; ?>" class=<?php echo isset($errores['musica']) && isset($_POST['submit']) ? "error" : ""; ?>>
                </div>
            <?php endforeach; ?>

            <?php if (isset($errores['musica']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['musica'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>

            <br><br>

            <label for="pasatiempo">Pasatiempo:</label>

            <?php foreach ($pasatiempo as $p) : ?>
                <div class="form-group
                ">
                    <?php echo $p; ?>
                    <input type="checkbox" name="pasatiempo[]" value="<?php echo $p; ?>" class=<?php echo isset($errores['pasatiempo']) && isset($_POST['submit']) ? "error" : ""; ?>>
                </div>
            <?php endforeach; ?>

            <?php if (isset($errores['pasatiempo']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['pasatiempo'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>