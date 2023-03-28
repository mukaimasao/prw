<?php

$operacao = trim(fgets(STDIN));

$M = array();

for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $M[$i][$j] = floatval(trim(fgets(STDIN)));
    }
}

$soma = 0;
for ($i = 7; $i <= 11; $i++) {
    for ($j = 11 -$i +1; $j <= $i-1; $j++) {
        $soma += $M[$i][$j];
    }
}
if ($operacao == "M") {
    $resultado = $soma / ((144-12-12)/4);
    echo number_format($resultado, 1, ".", "") . "\n";
} else {
    echo number_format($soma, 1, ".", "") . "\n";
}

?>