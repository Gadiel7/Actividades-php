<?php
if (isset($_POST['bandera'])){
    $archivo=$_FILES['file']['name'];
    $archivo=$_FILES['file']['type'];
    $archivo=$_FILES['file']['size'];
    echo "filename: ".$_FILES['file']['name']."<br>";
    echo "Type :".$_FILES['file']['type']. "<br>";
    echo "Size: ".$_FILES['file']['size']. "<br>";
    echo "Temp name: ".$_FILES['file']['tmp_name']. "<br>";
    echo "Error: ".$_FILES['file']['error']. "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="hidden" name="bandera">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>