<?php
$a = (int) readline();
$x = 1;
for (; $a > 0; $a--) {
    echo "$x " . ($x+1) . " " . ($x+2) . " PUM\n";
    $x += 4;
}
?>
