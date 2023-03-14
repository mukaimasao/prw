<?php
while (true) {
    $n = intval(fgets(STDIN));
    $m = 0;

    if ($n == 0) {
        break;
    } 

    if ($n % 2 != 0) {
        $n++;
    }

    for ($i = 0; $i < 5; $i++) {
        $m += $n;
        $n += 2;
    }

    echo $m . "\n";
}
?>