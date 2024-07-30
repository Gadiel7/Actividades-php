<?php
$n=$_GET['triangulo'];

for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
//sentencia if
$compra=$_GET['c'];
$puntos=0;
if ($compra>50 && $compra<=100){
    $puntos=$puntos+5;
}
elseif($compra>100 && $Compra<=200){
    $puntos=$puntos+15;
}
elseif($compra>200 && $compra<=500){
    $puntos=$puntos+30;
}
elseif ($compra>500){
    $puntos=$puntos+60;
}
echo"La cantidad de puntos es: ". $puntos;
echo "<br>";
switch (true) {
    case ($compra > 500):
        $puntos += 60;
        break;
    case ($compra > 200):
        $puntos += 30;
        break;
    case ($compra > 100):
        $puntos += 15;
        break;
    case ($compra > 50):
        $puntos += 5;
        break;
    default:
    $puntos+=0;
    break;
}

echo "La cantidad de puntos es: ". $puntos;

$inferior=$_GET['i'];
$superior=$_GET['s'];
$c=0;
while ($inferior <=$superior){
    echo $inferior;
    if ($inferior%7==0){
        $c++;
    }
    $inferior++;

}
echo"<br>";
echo "contador: ".$c;

echo "<br>";
$inferior = $_GET['a'];
$superior = $_GET['b'];
$c = 0;

do {
    echo $inferior;
    if ($inferior % 7 == 0) {
        $c++;
    }
    $inferior++;
} while ($inferior <= $superior);

echo "<br>";
echo "contador: " . $c;

$electrodomesticos=[
    ["nombre"=>"televisor",
    "precio"=>400, "estado"=>true],
    ["nombre"=>"heladera",
    "precio"=>200, "estado"=>false],
    ["nombre"=>"bicicleta",
    "precio"=>100, "estado"=>true]
];
echo "<br>";
echo "<br>";
foreach ($electrodomesticos as $productos){
    echo$productos['nombre']."<br>";
    echo$productos['precio']."<br>";
    echo($productos['estado'])?"Disponible <br> <br>": "No disponible "."<br><br>";
}
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";


echo "<br>";


?>