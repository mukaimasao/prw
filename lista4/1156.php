<?php

$soma = 0;
$denominador = 1;

for ($numerador = 1; $numerador <= 39; $numerador += 2) {
    $soma += $numerador / $denominador;
    $denominador *= 2;
}
echo number_format($soma, 2) . PHP_EOL;

?>
