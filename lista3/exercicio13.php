<?php 
    for($i = 1, $j =7; true;){
        echo"I=$i J=$j" . PHP_EOL;
        if(($i==9) && ($j==5)){
            break;
        }

        if($j==5){
            $j=8;
            $i +=2;
        }
        $j--;
    }

?>
