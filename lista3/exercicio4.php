<?php
$valores = [];
for ($i = 0; $i < 6; $i++) {
  $valores[$i] = (float) fgets(STDIN);
}

$positivos = 0;
$soma = 0;
foreach ($valores as $valor) {
  if ($valor > 0) {
    $positivos++;
    $soma += $valor;
  }
}
$media = $soma / $positivos;

echo $positivos . " valores positivos\n";
echo number_format($media, 1) . "\n";
?>
