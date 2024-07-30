<?php
$totalPagado = 0;
$ultimoPago = 0;
for ($mes = 1; $mes <= 20; $mes++) {
    if ($mes == 1) {
        $pagoMensual = 10;
    } elseif ($mes == 2) {
        $pagoMensual = 20;
    } elseif ($mes == 3) {
        $pagoMensual = 40;
    } else {
        $pagoMensual = 2 * $ultimoPago;
    }
    $totalPagado += $pagoMensual;
    $ultimoPago = $pagoMensual;
    
    echo "Mes $mes: Pago mensual = $pagoMensual, Total pagado hasta ahora = $totalPagado\n";
    echo"<br>";
}
echo"<br>";
echo "Total pagado en 20 meses: $totalPagado\n";
echo"<br>";
echo "Pago del mes 20: $ultimoPago\n";
?>
