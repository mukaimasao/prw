<?php
    $entrada = fgets(STDIN);
    $x = explode(" ", $entrada);
    $A = $x[0];
    $B = $x[1];
    $C = $x[2];
    $D = $x[3];
    if ($B > $C && $D > $A && $C + $D > $A + $B && $C > 0 && $D > 0 && $A % 2 == 0) {
        echo "Valores aceitos" . PHP_EOL;
    } else {
        echo "Valores nao aceitos" . PHP_EOL;
    }
?>