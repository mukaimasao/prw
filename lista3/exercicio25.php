<?php
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

if ($x > $y) {
  $t = $x;
  $x = $y;
  $y = $t;
}

$soma = 0;

for ($i = $x; $i <= $y; $i++) {
  if ($i % 13 !== 0) {
    $soma += $i;
  }
}

echo "$soma\n";
?>