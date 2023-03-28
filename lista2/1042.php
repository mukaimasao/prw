<?php
    $entrada = explode(" ", readline());
    $a = $entrada[0];
    $b = $entrada[1];
    $c = $entrada[2];
    
    sort($entrada);
    echo implode("\n", $entrada);
    echo"\n\n";
    echo"$a\n$b\n$c\n";
    
?>
