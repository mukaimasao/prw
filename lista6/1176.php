<?php

    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    for($i=2; $i<=60; $i++){
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    $t= intval(trim(fgets(STDIN)));
    for($i =1; $i<= $t; $i++){
        $n = intval(trim(fgets(STDIN)));
        echo "Fib($n) = " . $fib[$n] . PHP_EOL;
    }

?>
