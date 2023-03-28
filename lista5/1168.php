<?php
    $n = readline();
    while($n>0){
        $line = readline();
        $comprimento = strlen($line);
        $nled=0;
        for($j = 0; $j< $comprimento; $j++){
            $caracter = $line[$j];
            switch($caracter){
                case 0:
                    $nled+=6;
                    break;
                case 1:
                    $nled+=2;
                    break;
                case 2:
                    $nled +=5;
                    break;
                case 3:
                    $nled +=5;
                    break;
                case 4:
                    $nled +=4;
                    break;
                case 5:
                    $nled += 5;
                    break;
                case 6:
                    $nled +=6;
                    break;
                case 7:
                    $nled += 3;
                    break;
                case 8:
                    $nled += 7;
                    break;
                case 9:
                    $nled +=6;
                    break;
            }
        }
        
        echo"$nled leds\n";
        $n--;
    }

?>