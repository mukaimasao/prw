<?php
while(true){
    $n = intval(readline());
    if($n ==0){
        break;
    }else{
        for($i = 1; $i<=$n; $i++){
            if($i == $n){
                echo $i."\n";
            }else{
                echo $i." ";
            }
        }
    }
}
?>