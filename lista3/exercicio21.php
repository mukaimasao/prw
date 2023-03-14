<?php
    $i = readline();
    for($i>0; $i--;){
        list($n1, $n2) = explode(' ', readline());
        if($n2 == 0){
            echo"divisao impossivel\n";
        }else{
            $media = number_format($n1/$n2, 1, ".", "");
            echo $media . PHP_EOL;
        }
        
    }

?>
