<?php

$m = array();
$soma = 0;
$c = intval(trim(fgets(STDIN)));
$op = fgets(STDIN);


for($i=0; $i<12; $i++){
    for($j=0; $j<12; $j++){
        $m[$i][$j] = floatval(trim(fgets(STDIN)));
    }
}

for($i=0; $i<12; $i++){
    $soma+= $m[$i][$c];
}

if($op[0] == "M"){
    $soma = $soma/12.0;
}
echo number_format($soma, 1, ".", "") . PHP_EOL;
?>