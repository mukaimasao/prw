<?php

$n = trim(intval(fgets(STDIN)));
while($n>0){
    $entrada = trim(fgets(STDIN));
    
    $tm = strlen($entrada);;
    
    for($i=0; $i<$tm;$i++){
        if($entrada[$i]=='P'){
            $entrada[$i] = 'B';
        }else if($entrada[$i]=='F'){
            $entrada[$i] = 'V';
        }else if($entrada[$i] == 'T'){
            $entrada[$i] = 'D';
        }else if($entrada[$i]== 'R'){
            $entrada[$i] = 'L';
        }else if($entrada[$i] == 'F'){
            $entrada[$i] = 'S';
        }else if($entrada[$i]== 'J'){
            $entrada[$i] = 'Z';
        }else if($entrada[$i]== 'X'){
            $entrada[$i] = 'S';
        }else{
            continue;
        }
    }
    $string = explode(' ', $entrada);
    $string_inversa = array_reverse($string);
    $string_final = implode(' ', $string_inversa);
    echo $string_final . PHP_EOL;
    $n--;
}
?>