<?php

    $x = array();
    for($i=0; $i<10; $i++){
        $line = fgets(STDIN);
        $x[$i] = intval(trim($line));
        if($x[$i]<0 || $x[$i] ==0){
            $x[$i] = 1;
        }
    }
    for($i=0; $i<10; $i++){
        echo "X[".$i."] = " . $x[$i] . PHP_EOL;
    }

?>
