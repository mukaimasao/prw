<?php

while (true) {
    $n = intval(fgets(STDIN));

    if ($n == 0) {
        break;
    }

    $matriz = array();

    $valor = 1;
    $limite = intval($n / 2);

    for ($camada = 0; $camada < $limite; $camada++) {
        for ($i = $camada; $i < $n - $camada; $i++) {
            for ($j = $camada; $j < $n - $camada; $j++) {
                $matriz[$i][$j] = $valor;
            }
        }
        $valor++;
    }

    if ($n % 2 == 1) {
        $matriz[$limite][$limite] = $valor;
    }

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j == 0) {
                echo str_pad($matriz[$i][$j], 3, " ", STR_PAD_LEFT);
            } else {
                echo " " . str_pad($matriz[$i][$j], 3, " ", STR_PAD_LEFT);
            }
        }
        echo "\n";
    }
    echo "\n";
}

?>
