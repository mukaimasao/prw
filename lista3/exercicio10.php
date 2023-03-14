<?php

for ($i = 1; $i <= 100; $i++) {
    $n = (int) readline();
    if ($n > $mn) {
        $mn = $n;
        $imn = $i;
    }
}

echo $mn . "\n" . $imn . "\n";

?>
