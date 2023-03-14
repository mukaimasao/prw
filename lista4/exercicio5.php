<?php
$ns = array();
$ns[0] = 0;
$ns[1] = 1;

$n = intval(fgets(STDIN));
if ($n < 0 || $n > 46) {
    // Handle invalid input
}
for ($i = 2; $i <= 46; $i++) {
    $ns[$i] = $ns[$i - 2] + $ns[$i - 1];
}
echo "0";
for ($j = 1; $j < $n; $j++) {
    echo " ".$ns[$j];
}
echo "\n";
?>