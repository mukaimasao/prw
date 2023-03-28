<?php

    $a = array();
   for($i=0; $i<100; $i++){
    $a[$i] = floatval(trim(fgets(STDIN)));
    if($a[$i] <=10.0){
        echo "A[".$i."] = ". number_format($a[$i], 1, ".", "") . PHP_EOL;
    }
   }

?>
