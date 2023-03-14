<?php
$nota1 = -1; 
$nota2 = -1;
    while($nota1 < 0 || $nota1 > 10 ){
        $nota1 = floatval(readline());
        if($nota1 < 0 || $nota1 > 10){
            echo"nota invalida\n";
        }
    }

    while ($nota2 < 0 || $nota2 > 10) {
        $nota2 = floatval(readline());
        if ($nota2 < 0 || $nota2 > 10) { 
            echo "nota invalida\n"; 
        }
    }

    $media = number_format(($nota1 + $nota2) / 2, 2, ".", ""); 
    echo"media = $media\n"; 

?>
