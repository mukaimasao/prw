<?php

    $n = array();
    $t = intval(trim(fgets(STDIN)));
    for($i=0; $i<1000; $i++){
        $n[$i] = $i%$t;
    }
    for($i =0; $i<1000; $i++){
        echo"N[$i] = " . $n[$i] . PHP_EOL;
    }

?>
