<?php
$entrada = explode(' ', fgets(STDIN));
$X = $entrada[0];
$Y = $entrada[1];

for ($i = 1; $i <= $Y; $i++) {
    echo $i;

    if ($i % $X == 0) {
        echo "\n";
    } else {
        echo ' ';
    }
}

?>