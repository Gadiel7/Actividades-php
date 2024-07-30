<?php
$errores = [];
$nombre = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

    if (empty($nombre)) {
        $errores['nombre'] = "El nombre es obligatorio";
    }

    if (isset($_FILES['foto'])) {
        $foto = $_FILES['foto'];
        if ($foto['type'] != 'image/png') {
            $errores['foto'] = "La foto debe ser un archivo PNG";
        } elseif ($foto['size'] > 2 * 1024 * 1024) {
            $errores['foto'] = "La foto no puede ser mayor de 2MB";
        }
    } else {
        $errores['foto'] = "La foto es obligatoria";
    }

    if (isset($_FILES['expediente'])) {
        $expediente = $_FILES['expediente'];
        if ($expediente['type'] != 'application/pdf') {
            $errores['expediente'] = "El expediente debe ser un archivo PDF";
        } elseif ($expediente['size'] > 10 * 1024 * 1024) {
            $errores['expediente'] = "El expediente no puede ser mayor de 10MB";
        }
    } else {
        $errores['expediente'] = "El expediente es obligatorio";
    }

    if (empty($errores)) {
        // Crear directorio de uploads si no existe
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        // Guardar los archivos
        $fotoPath = 'uploads/' . basename($foto['name']);
        $expedientePath = 'uploads/' . basename($expediente['name']);
        move_uploaded_file($foto['tmp_name'], $fotoPath);
        move_uploaded_file($expediente['tmp_name'], $expedientePath);

        // Redirigir a la página de éxito
        header("Location: success.php?nombre=" . urlencode($nombre) . "&foto=" . urlencode($fotoPath) . "&expediente=" . urlencode($expedientePath));
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Carga</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
        <?php if (isset($errores['nombre'])) echo "<p style='color: red;'>{$errores['nombre']}</p>"; ?>
        <br><br>

        <label for="foto">Foto (PNG, max 2MB):</label>
        <input type="file" id="foto" name="foto" accept="image/png">
        <?php if (isset($errores['foto'])) echo "<p style='color: red;'>{$errores['foto']}</p>"; ?>
        <br><br>

        <label for="expediente">Expediente (PDF, max 10MB):</label>
        <input type="file" id="expediente" name="expediente" accept="application/pdf">
        <?php if (isset($errores['expediente'])) echo "<p style='color: red;'>{$errores['expediente']}</p>"; ?>
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>


