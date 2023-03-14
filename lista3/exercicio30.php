<?php
    $n = intval(readline());
    $x = 1;

    if ($n > 1 && $n < 1000) {
        for ($i = 0; $i < $n; $i++) {
            echo $x . " " . pow($x, 2) . " " . pow($x, 3) . "\n";
            echo $x . " " . (pow($x, 2) + 1) . " " . (pow($x, 3) + 1) . "\n";
            $x += 1;
        }
    }
?>
