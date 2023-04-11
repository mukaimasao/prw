<?php
while ($n = intval(trim(fgets(STDIN)))){
    $matriz = array();
    
    for($i=0; $i<$n; $i++){
        for($j=0; $j< $n; $j++){
            if($i+$j == $n-1){
                $matriz[$i][$j] = 2;
            }else if($i == $j){
                $matriz[$i][$j] = 1;
            }else{
                $matriz[$i][$j] = 3;
            }
        }
    }
    for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $n; $j++) {
        printf("%1d", $matriz[$i][$j]);
        
    }
    printf("\n");
}
}
?>