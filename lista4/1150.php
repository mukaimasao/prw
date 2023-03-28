<?php
$X = intval(fgets(STDIN));
$Z = $X;

do {
    $Z = intval(fgets(STDIN));
} while ($Z <= $X);

$V1 = 0;
$V2 = 0;

for (; $V2 < $Z; $X++) {
    $V2 += $X;
    $V1++;
}

echo $V1 . "\n";
?>