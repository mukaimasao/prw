<?php
    $entrada = explode(" ", readline());
    $hi = $entrada[0];
    $ht = $entrada[1];
    $tempo = $ht - $hi;

    if($tempo<=0){
        $tempo += 24;
    }
    echo"O JOGO DUROU $tempo HORA(S)\n"
    
?>