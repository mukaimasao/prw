<?php
while (true) {
    $entrada = trim(fgets(STDIN));
    $valores = explode(' ', $entrada);
    $a = intval($valores[0]);
    $b = intval($valores[1]);
    $c = intval($valores[2]);

    if ($a === 0) {
        break;
    }

    $re = floor(sqrt(($a * $b) * (100 / $c)));
    echo $re . PHP_EOL;
}
?>
