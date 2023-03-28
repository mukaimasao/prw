<?php
    $i =0;
    $tidades=0;
    while(true){
        $idade = readline();
        if($idade < 0){
            break;
        }
        $tidades += $idade;
        $i++;
    }
    $media = $tidades/$i;
    echo number_format($media, 2) . PHP_EOL;

?>