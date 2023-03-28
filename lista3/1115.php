<?php
    while(true){
        list($x, $y) = explode(' ', readline());
        if($x ==0 || $y ==0){
            break;
        }else if($x>0 && $y>0){
            echo"primeiro\n";
        }else if($x>0 && $y<0){
            echo"quarto\n";
        }else if($x<0 && $y>0){
            echo"segundo\n";
        }else if($x<0 && $y<0){
            echo"terceiro\n";
        }
    }
    

?>
