<?php
    $p1 = explode(' ', fgets(STDIN));
    $p2 = explode(' ', fgets(STDIN));
    
    $TOTAL = number_format($p1[1]*$p1[2] + $p2[1]* $p2[2], 2, ".", "");

    echo "VALOR A PAGAR: R$ $TOTAL\n";
?>
