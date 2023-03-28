<?php
$valores = [];
for ($i = 1; $i <= 6; $i++) {
    $valor = (float) readline();
    if ($valor !== 0) {
        $valores[] = $valor;
    }
}
$qtdPositivos = 0;
foreach ($valores as $valor) {
    if ($valor > 0) {
        $qtdPositivos++;
    }
}
echo "$qtdPositivos valores positivos\n";
?>