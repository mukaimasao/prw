<?php

    $n = array();
    $t = floatval(trim(fgets(STDIN)));
    $n[0] = $t;
    for($i=1; $i<=99; $i++){

        $n[$i] = $n[$i-1]/2.0;
    }
    for($i =0; $i<=99; $i++){
        echo"N[$i] = " .number_format($n[$i], 4, ".", ""); . PHP_EOL;
    }

?>
