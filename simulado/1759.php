<?php
    $n = intval(trim(fgets(STDIN)));
    for($i=0; $i<$n; $i++){
        if($i=$n-1){
            echo "Ho!" . PHP_EOL;
        }else{
            echo "Ho ";
        }
    }
?>