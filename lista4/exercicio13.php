<?php
$t = intval(fgets(STDIN));

for ($i = 0; $i < $t; $i++) {
    list($pa, $pb, $g1, $g2) = sscanf(fgets(STDIN), "%d %d %lf %lf");

    $anos = 0;
    while ($pa <= $pb) {
        $pa = intval($pa * (1 + $g1 / 100));
        $pb = intval($pb * (1 + $g2 / 100));

        $anos++;
        if ($anos > 100) {
            echo "Mais de 1 seculo.\n";
            break;
        }
    }
    if ($anos <= 100) {
        echo $anos . " anos.\n";
    }
}
?>