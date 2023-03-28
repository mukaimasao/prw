<?php

$m = array();
$soma = 0;
$op = fgets(STDIN);


for($i=0; $i<12; $i++){
    for($j=0; $j<12; $j++){
        $m[$i][$j] = floatval(trim(fgets(STDIN)));
    }
}

for($i=0; $i<=11; $i++){
    for($j=0; $j<=11; $j++){
        $soma+= $m[$i][$j+1];
    }
    
}

if($op[0] == "M"){
    $soma = $soma/66.0;
}
echo number_format($soma, 1, ".", "") . PHP_EOL;
?>