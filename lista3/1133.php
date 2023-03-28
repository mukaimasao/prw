<?php
$n1 = intval(fgets(STDIN));
$n2 = intval(fgets(STDIN));

if ($n1 > $n2) {
    $temp = $n1;
    $n1 = $n2;
    $n2 = $temp;
}

for ($i = $n1+1; $i < $n2; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo "$i\n";
    }
}
?>