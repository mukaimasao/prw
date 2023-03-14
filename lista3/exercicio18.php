<?php
    while(true){
        list($X, $Y) = explode(" ", readline());
        if($X == $Y){
            break;
        }else if($X>$Y){
            echo"Decrescente\n";
        }else{
            echo"Crescente\n";
        }
    }
?>
