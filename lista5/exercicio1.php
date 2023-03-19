<?php 
    $n = readline();
    for($i=0; $i<$n; $i++){
        $line = readline();
        $comprimento = strlen($line);
        for($j = 0; $j< $comprimento; $j++){
            $caracter = $line[$j];
            if($caracter == " "){
                continue;
            }else if(ctype_punct($caracter)){
                $caracter = $line[$j];
            }else if(is_numeric($caracter)){
                $caracter = $line[$j];
            }else{
                $caracter = ord($line[$j]) + 3;
                $caracterA = chr($caracter);
                $line[$j] = $caracterA;
            }
        }
        $lineI = strrev($line);
        $meio = ($comprimento / 2);
        for($k =0; $k<$comprimento - $meio - 1; $k++){
            $caractere = $lineI[$meio + $k];
            if($caractere = " "){
                continue;
            }else if(ctype_punct($caractere)){
                $caractere = $lineI[$meio + $k];
            }else if(is_numeric($caractere)){
                $caractere = $lineI[$meio + $k];
            }else{
                $caractere = ord($lineI[$meio + $k]) - 1;
                $caracterea = chr($caractere);
                $lineI[$meio+ $k] = $caracterea;
            }
        }
    }
    echo $lineI;

?>
<?php

$N = intval(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    $M = trim(fgets(STDIN));

    $n = strlen($M);

    for ($j = 0; $j < $n; $j++) {
        if (ctype_alpha($M[$j])) {
            $M[$j] = chr(ord($M[$j]) + 3);
        }
    }

    for ($j = 0; $j < $n / 2; $j++) {
        $aux = $M[$j];
        $M[$j] = $M[$n - 1 - $j];
        $M[$n - 1 - $j] = $aux;
    }

    for ($j = intval($n / 2); $j < $n; $j++) {
        $M[$j] = chr(ord($M[$j]) - 1);
    }

    echo $M . PHP_EOL;
}