<?php
    $entrada = explode(" ", readline());
    $hi = $entrada[0];
    $mi = $entrada[1];
    $ht = $entrada[2];
    $mt = $entrada[3];
    $mi += $hi *60;
    $mt += $ht * 60;
    $tempo = $mt - $mi;

    if($tempo<=0){
        $tempo += 24*60;
    }
    $h = number_format(floor($tempo/60), 0, "", "");
    $m = $tempo%60;
    echo"O JOGO DUROU $h HORA(S) E $m MINUTO(S)\n";
    
?>