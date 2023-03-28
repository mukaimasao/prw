<?php

$operacao = trim(fgets(STDIN));

$M = array();

for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $M[$i][$j] = floatval(trim(fgets(STDIN)));
    }
}

$soma = 0;
$contagem = 0;
for ($i = 11; $i >=0; $i--) {
    for ($j = $i - 1; $j >= 0; $j--) {
        $soma += $M[$i][$j];
        $contagem++;
    }
}
if ($operacao == "M") {
    $resultado = $soma / $contagem;
    echo number_format($resultado, 1, ".", "") . "\n";
} else {
    echo number_format($soma, 1, ".", "") . "\n";
}

?>
