<?php
    $n = intval(trim(fgets(STDIN)));
    $sS =0;
    $sB=0;
    $sA=0;
    $sSp =0;
    $sBp=0;
    $sAp=0;
    $pS=0;
    $pB=0;
    $pA=0;
    while($n>0){
        $nome = trim(fgets(STDIN));
        $entrada1 = explode(' ', trim(fgets(STDIN)));
        $sS += $entrada1[0];
        $sB += $entrada1[1];
        $sA += $entrada1[2];
        $entrada2 = explode(' ', trim(fgets(STDIN)));
        $sSp += $entrada2[0];
        $sBp += $entrada2[1];
        $sAp += $entrada2[2];
        $n--;
    }
    $pS = number_format(($sSp*100)/$sS, 2, ".", "");
    $pB = number_format(($sBp*100)/$sB, 2, ".", "");
    $pA = number_format(($sAp*100)/$sA, 2, ".", "");

    echo"Pontos de Saque: $pS %." . PHP_EOL;
    echo"Pontos de Bloqueio: $pB %." . PHP_EOL;
    echo"Pontos de Ataque: $pA %." . PHP_EOL;
?>