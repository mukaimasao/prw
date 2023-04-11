<?php
$vm = trim(floatval(fgets(STDIN)));
$dv = trim(floatval(fgets(STDIN)));
$cm = trim(floatval(fgets(STDIN)));

$th = $dv/$vm;
$tc = $dv/$cm;

echo "Total horas: " . number_format($th, 2, ".", "") . PHP_EOL;
echo "Total combustivel: " . number_format($tc, 2, ".", "") . PHP_EOL;

?>