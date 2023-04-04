<?php
    $n1 = intval(trim(fgets(STDIN)));
    $n2 = intval(trim(fgets(STDIN)));
    $vf=0;
    if($n1%2 == 0 && $n2%2 == 0){
        $vf=1;
    }else if($n1%2 != 0 && $n2%2 != 0){
        $vf=1;
    }else if($n1%2 != 0 && $n2%2 == 0 || $n1%2 == 0 &&$n1%2 != 0){
        $vf = 0;
    }
    echo $vf . PHP_EOL;
?>