<?php

$N = array();

for ($i=19; $i>=0; $i--) {
    fscanf(STDIN, "%d", $N[$i]);
}

for ($i=0; $i<20; $i++) {
    echo "N[{$i}] = {$N[$i]}\n";
}

?>
