<?php
function primo($n) {
    if ($n == 2) {
        return true;
    }
    if ($n < 2 || $n % 2 == 0) {
        return false;
    }
    for ($i = 3; $i <= sqrt($n); $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $x = intval(fgets(STDIN));
    if (primo($x)) {
        echo "$x eh primo\n";
    } else {
        echo "$x nao eh primo\n";
    }
}
