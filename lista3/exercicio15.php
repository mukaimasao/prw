<?php
    $i = 0;
    $j = 1;
    while($i <= 2.1){
        echo"I=$i J=" . ($j+$i)  . PHP_EOL;
        echo"I=$i J=" . ($j+1+$i) . PHP_EOL;
        echo"I=$i J=" . ($j+2+$i) . PHP_EOL;
        $i+= 0.2;
    }
?>