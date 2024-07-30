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

?>