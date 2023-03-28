<?php

$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    $x = (int) readline();

    if ($x == 0) {
        echo "NULL\n";
    } else if ($x % 2 == 0) {
        echo ($x > 0 ? "EVEN POSITIVE\n" : "EVEN NEGATIVE\n");
    } else {
        echo ($x > 0 ? "ODD POSITIVE\n" : "ODD NEGATIVE\n");
    }
}

?>
