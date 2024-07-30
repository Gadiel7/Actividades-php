<?php
$errores = []; // Inicializamos el array de errores fuera del bloque if para usarlo en el formulario

if (isset($_POST['bandera'])) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';
    $idioma = isset($_POST['idioma']) ? $_POST['idioma'] : '';
    $musica = isset($_POST['musica']) ? $_POST['musica'] : '';
    $pasatiempos = isset($_POST['pasatiempos']) ? $_POST['pasatiempos'] : [];

    if ($nombre === '') {
        $errores[0] = "<p class='error'>El nombre es obligatorio</p>";
    } elseif (strlen($nombre) < 3 || strlen($nombre) > 20) {
        $errores[0] = "<p class='error'>Nombre debe tener entre 3 y 20 caracteres</p>";
    }

    if ($apellido === '') {
        $errores[1] = "<p class='error'>El apellido es obligatorio</p>";
    } elseif (strlen($apellido) < 3 || strlen($apellido) > 20) {
        $errores[1] = "<p class='error'>Apellido debe tener entre 3 y 20 caracteres</p>";
    }

    if (empty($correo)) {
        $errores[2] = "<p class='error'>El correo es obligatorio</p>";
    }

    if ($comentarios === '') {
        $errores[3] = "<p class='error'>Los comentarios son obligatorios</p>";
    } elseif (strlen($comentarios) < 5 || strlen($comentarios) > 50) {
        $errores[3] = "<p class='error'>Comentarios debe tener entre 5 y 50 caracteres</p>";
    } elseif (preg_match('/[*.@\/]/', $comentarios)) {
        $errores[3] = "<p class='error'>Comentarios no pueden contener los caracteres *, ., / o @</p>";
    }

    if (empty($idioma)) {
        $errores[4] = "<p class='error'>El idioma es obligatorio</p>";
    }

    if (empty($musica)) {
        $errores[5] = "<p class='error'>La música es obligatoria</p>";
    }

    if (empty($pasatiempos)) {
        $errores[6] = "<p class='error'>Al menos un pasatiempo es obligatorio</p>";
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
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="index.css"> <!-- Asumiendo que ya tienes este archivo -->
    
    <style>
        .error {
            color: red;
        }
        /* styles.css */
.input-error {
    border: 2px solid red !important;
}

    </style>
</head>
<body>
    <form action="" method="post" class="form-container w3-card-4 fondo1">
    <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>" class="<?php echo isset($errores[0]) ? 'input-error' : ''; ?>">
        <?php
        if (isset($errores[0])) {
            echo $errores[0];
        }
        ?>
        <br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="<?php echo isset($apellido) ? $apellido : ''; ?>" class="<?php echo isset($errores[1]) ? 'input-error' : ''; ?>">
        <?php
        if (isset($errores[1])) {
            echo $errores[1];
        }
        ?>
        <br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="<?php echo isset($correo) ? $correo : ''; ?>" class="<?php echo isset($errores[2]) ? 'input-error' : ''; ?>">
        <?php
        if (isset($errores[2])) {
            echo $errores[2];
        }
        ?>
        <br><br>

        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios" class="<?php echo isset($errores[3]) ? 'input-error' : ''; ?>"><?php echo isset($comentarios) ? $comentarios : ''; ?></textarea>
        <?php
        if (isset($errores[3])) {
            echo $errores[3];
        }
        ?>
        //aqui comentarios
        <br><br>
        <label for="idioma">Idiomas:</label>
        <select id="idioma" name="idioma" class="<?php echo isset($errores[4]) ? 'input-error' : ''; ?>">
            <option value="">Seleccione el idioma</option>
            <option value="es" <?php echo (isset($idioma) && $idioma == 'es') ? 'selected' : ''; ?>>Español</option>
            <option value="in" <?php echo (isset($idioma) && $idioma == 'in') ? 'selected' : ''; ?>>Inglés</option>
            <option value="ay" <?php echo (isset($idioma) && $idioma == 'ay') ? 'selected' : ''; ?>>Aymara</option>
            <option value="port" <?php echo (isset($idioma) && $idioma == 'port') ? 'selected' : ''; ?>>Portugués</option>
        </select>
        <?php
        if (isset($errores[4])) {
            echo $errores[4];
        }
        ?>
        <br><br>
        
        <label for="musica">Música:</label><br>
        <label for="rock">Rock</label>
        <input type="radio" id="rock" name="musica" value="Rock" <?php echo (isset($musica) && $musica == 'Rock') ? 'checked' : ''; ?>>
        <br>
        <label for="clasico">Clásico</label>
        <input type="radio" id="clasico" name="musica" value="Clásico" <?php echo (isset($musica) && $musica == 'Clásico') ? 'checked' : ''; ?>>
        <?php
        if (isset($errores[5])) {
            echo $errores[5];
        }
        ?>
        <br><br>

        <label for="pasatiempo">Pasatiempo:</label><br>
        <input type="checkbox" id="jugar" name="pasatiempos[]" value="Jugar" <?php echo (isset($pasatiempos) && in_array('Jugar', $pasatiempos)) ? 'checked' : ''; ?>>
        <label for="jugar">Jugar</label><br>
        <input type="checkbox" id="cantar" name="pasatiempos[]" value="Cantar" <?php echo (isset($pasatiempos) && in_array('Cantar', $pasatiempos)) ? 'checked' : ''; ?>>
        <label for="cantar">Cantar</label><br>
        <input type="checkbox" id="estudiar" name="pasatiempos[]" value="Estudiar" <?php echo (isset($pasatiempos) && in_array('Estudiar', $pasatiempos)) ? 'checked' : ''; ?>>
        <label for="estudiar">Estudiar</label><br>
        <input type="checkbox" id="correr" name="pasatiempos[]" value="Correr" <?php echo (isset($pasatiempos) && in_array('Correr', $pasatiempos)) ? 'checked' : ''; ?>>
        <label for="correr">Correr</label>
        <?php
        if (isset($errores[6])) {
            echo $errores[6];
        }
        ?>
        <br><br>

        <input type="submit" name="bandera" value="Enviar">
    </form>
</body>
</html>
