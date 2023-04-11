<?php
    
    while(true){
        $n = trim(intval(fgets(STDIN)));
        if($n ==0){
            break;
        }
        $pd= explode(' ', trim(intval(fgets(STDIN))));
        $x= $pd[0];
        $y = $pd[1];
        for($i=0; $i<$n; $i++){
            $matriz = explode(' ', trim(intval(fgets(STDIN))));
            $xx = $matriz[$i];
            $yy = $matriz[$i+1];
            if($xx == $x){
                echo 'divisa' . PHP_EOL;
            }else if($yy = $y){
                echo 'divisa' . PHP_EOL;
            }else if($xx > $x && $yy >$y){
                echo 'NE' . PHP_EOL;
            }else if($xx > $x && $yy <$y){
                echo 'SE' . PHP_EOL;
            }else if($xx < $x && $yy >$y){
                echo 'NO' . PHP_EOL;
            }else if($xx < $x && $yy <$y){
                echo 'SO' . PHP_EOL;
            }
        }
        $n--;
    }
?>