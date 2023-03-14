<?php
    $entrada = fgets(STDIN);
    $x = explode(" ", $entrada);
    $c1 = $x[0];
    $q1 = $x[1];

    switch($c1){
        case 1:
            $td += 4.00*$q1;
            break;
        
        case 2:
            $td += 4.50*$q1;
            break;
        
        case 3:
            $td += 5.00*$q1;
            break;

        case 4:
            $td+=2.00*$q1;
            break;

        case 5:
            $td+=1.50*$q1;
    }
    echo"Total: R$ " . number_format($td, 2, ".", "") . "\n";
    
?>