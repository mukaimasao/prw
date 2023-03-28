<?php
    $entrada = explode(" ", readline());
    $a = $entrada[0];
    $b = $entrada[1];
    
    if($b%$a==0 || $a%$b ==0){
        echo"Sao Multiplos\n";
    }else{
        echo"Nao sao Multiplos\n";
    }
    
?>