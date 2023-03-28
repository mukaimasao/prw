<?php

$n = intval(fgets(STDIN));
$x = explode(' ', fgets(STDIN));

$mv = $x[0];
$pmv = 0;

for ($i = 1; $i < $n; $i++) {
  if ($x[$i] < $mv) {
    $mv = $x[$i];
    $pmv = $i;
  }
}
echo"Menor valor: $mv" . PHP_EOL;
echo"Posicao: $pmv" . PHP_EOL;
?>

