<?php

$N = intval(fgets(STDIN));

for ($i = 1; $i <= $N; $i++) {
    $X = intval(fgets(STDIN));
    
    $soma = 0;
    
    for ($j = 1; $j < $X; $j++) {
        if ($X % $j == 0) {
            $soma += $j;
        }
    }
    
    if ($soma == $X) {
        echo "$X eh perfeito\n";
    } else {
        echo "$X nao eh perfeito\n";
    }
}

?>
