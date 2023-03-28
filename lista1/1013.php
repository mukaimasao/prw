<?php
    $entrada = explode(' ', fgets(STDIN));
    $A = floatval($entrada[0]);
    $B = floatval($entrada[1]);
    $C = floatval($entrada[2]);
    $maiorAB = ($A + $B + abs($A-$B))/2;
    $maiorABC = ($maiorAB + $C + abs($maiorAB - $C))/2;
    echo"$maiorABC eh o maior\n";
?>
