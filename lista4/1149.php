<?php

    $entrada = explode(' ', fgets(STDIN));
    $N = intval($entrada[count($entrada) - 1]);
    $A = intval($entrada[0]);
    if($N<0 || $N ==0){
        $N = readline();
    }
    $soma = 0;
    for ($i = 0; $i < $N; $i++) {
        $soma +=  $A + $i;
    }
    echo "$soma\n";


?>