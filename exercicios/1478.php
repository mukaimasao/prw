<?php

while (true) {
    $n = intval(fgets(STDIN));
    if ($n === 0) {
        break;
    }
    $matriz = array();
    for ($i = 0; $i < $n; $i++) {
        $row = array();
        for ($j = 0; $j < $n; $j++) {
            $row[] = abs($i - $j) + 1;
        }
        $matriz[] = $row;
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