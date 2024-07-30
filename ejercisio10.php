<?php
$nombre=$_GET['nombre'];
$monto=$_GET['cantidad'];
$edad=$_GET['edad'];
$iva=$_GET['iva'];
$monto_iva=0;
function ConIva(int $monto):float{
    $monto_iva=$monto+($monto*0.13);
    return $monto_iva;
}
function SinIVa($monto){
    $monto_iva=$monto-($monto*0.13);
    return $monto_iva;
}
try{
    echo "Resultado ". (($iva=="true")?(ConIva($monto)):(SinIVa($monto)));
} catch(TypeError $e){
    echo "Error". $e->getMessage();
}
echo"Resultado ".(($iva=="true")?(ConIva($monto)):(SinIVa($monto)));
echo"Edad".($edad>=18)?" Puedes realizar la compra":"No puedes realizar la compra";

//segundo ejercisio
//array de notas y calcular el promedio de 10 estudiantes
echo "<br>";
function promedio(int | float ...$notas){
    $suma=0;
    $prom=0;
    foreach($notas as $nota){
        $suma+=$nota;

    }
    return $prom=$suma/count($notas);
    //yield $suma;
    //yield $nota;

}
echo "El promedio de notas es: ".promedio(45,56,34,22,69);
?>