<?php
$n = intval(readline());
$nf = 1;

if ($n > 0 && $n < 13) {
    for ($i = $n; $i >= 1; $i--) {
        $nf *= $i;
    }
    echo $nf . "\n";
}
?>