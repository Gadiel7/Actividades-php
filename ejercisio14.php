<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario</h2>
    <form action="guardar_datos.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>
        
        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera" name="carrera" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
