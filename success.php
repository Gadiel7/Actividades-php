<?php
if (!isset($_GET['nombre']) || !isset($_GET['foto']) || !isset($_GET['expediente'])) {
    echo "Datos incompletos.";
    exit;
}

$nombre = htmlspecialchars($_GET['nombre']);
$foto = htmlspecialchars($_GET['foto']);
$expediente = htmlspecialchars($_GET['expediente']);
$expedienteNombre = basename($expediente);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        .container {
            display: flex;
            align-items: center;
        }
        .datos {
            margin-left: 20px;
        }
        .foto {
            max-width: 200000px; /* Ajusta el tamaño máximo de la imagen */
            max-height: 200000px; /* Ajusta el tamaño máximo de la imagen */
            
            
        }
    </style>
</head>
<body>
    <h1>Datos ingresados</h1>
    <div class="container">
        <img src="<?php echo $foto; ?>" alt="Foto de <?php echo $nombre; ?>" class="foto">
        <div class="datos">
            <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
            <p><strong>Expediente:</strong> <?php echo $expedienteNombre; ?></p>
        </div>
    </div>
</body>
</html>



