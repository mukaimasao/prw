<?php

$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    $nt = explode(" ", readline());

    $media = ($nt[0] * 2 + $nt[1] * 3 + $nt[2] * 5) / 10;

    echo number_format($media, 1, '.', '') . "\n";
}

?>
