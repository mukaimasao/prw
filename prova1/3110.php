<?php
    $matriz[5][5] = array();
    $id = trim(floatval(fgets(STDIN)));
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            $matriz[$i][$j] = trim(floatval(fgets(STDIN)));
        }
    }
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            if($matriz[$i][$j] >= $id){
                echo "Valor Encontrado: " . number_format($matriz[$i][$j], 2, ".", "") . " Linha: $i Coluna: $j" . PHP_EOL;
            }
        }
    }
?>