<?php

do {
    $nota1 = floatval(readline());
    while ($nota1 < 0 || $nota1 > 10) {
        echo "nota invalida\n";
        $nota1 = floatval(readline());
    }

    $nota2 = floatval(readline());
    while ($nota2 < 0 || $nota2 > 10) {
        echo "nota invalida\n";
        $nota2 = floatval(readline());
    }
    $media = ($nota1 + $nota2) / 2;
    printf("media = %.2f\n", $media);

    do {
        echo "novo calculo (1-sim 2-nao)\n";
        $opcao = intval(readline());
    } while ($opcao != 1 && $opcao != 2);
} while ($opcao != 2);

?>
