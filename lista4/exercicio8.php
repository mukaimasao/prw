<?php

$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += 1/$i;
}

echo number_format($soma, 2) . PHP_EOL;
?>  