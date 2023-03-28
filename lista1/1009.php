<?php
    $n = readline();
    $sf = readline();
    $tv = readline();
    $TOTAL = number_format($sf + (0.15 * $tv), 2, ".", "");

    echo "TOTAL = R$ $TOTAL\n";
?>
