<?php

    $n = array();
    $v = intval(trim(fgets(STDIN)));
    $n[0] = $v;
    for($i = 1; $i<=10;$i++){
        $n[$i] = $n[($i-1)] * 2;
    }
    for($j=0; $j<10; $j++){
        echo "N[".$j."] = ".$n[$j]. PHP_EOL;
    }

?>
