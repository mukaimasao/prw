<?php
    
    while(true){
        $n = readline();
        if($n ==0){
            break;
        }
        
        $entrada1 = explode(' ', readline());
        $N = $entrada1[0];
        $m = $entrada1[1];
        for($i=0; $i<$n; $i++){

            $entrada2 = explode(' ', readline());
            $x = $entrada2[0];
            $y = $entrada2[1];
            $localizacao='';
            if($y > $m) {
                $localizacao = trim("N");
            }if($y < $m) {
                $localizacao = trim("S");
            }
            if($x > $N) {
                $localizacao .= trim("E");
            }if($x < $N) {
                $localizacao .= trim("O");
            }
            if(($x == $N) || ($y == $m)) {
                $localizacao = trim("divisa");
            }
            echo $localizacao . PHP_EOL;
        }
    }
?>