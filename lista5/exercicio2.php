<?php

while (true) {
    $input = readline();
    if ($input === "0 0") {
        break;
    }
    $tokens = explode(' ', $input);
    $d = $tokens[0];
    $n = $tokens[1];
    $size = strlen($n);
    $value = 0;

    for ($i = 0; $i < $size; $i++) {
        if ($n[$i] !== $d) {
            $value .= $n[$i];
        }
    }

    if ($value == 0) {
        echo "0\n";
    } else {
        echo ltrim($value, '0') . "\n";
    }
}

?>