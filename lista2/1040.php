<?php
    $entrada = explode(" ", fgets(STDIN));
    $n1 = $entrada[0] * 2;
    $n2 = $entrada[1] * 3;
    $n3 = $entrada[2] * 4;
    $n4 = $entrada[3] * 1;
    $media = number_format((($n1+$n2+$n3+$n4)/10), 1, "." , "");

    if($media < 5) { 
        echo "Media: " . number_format(($media - 0.1), 1, '.', '') . PHP_EOL;
    }else {
        echo "Media: " . number_format($media, 1, '.', '') . PHP_EOL;
    }
    if($media >= 7.0){
        echo"Aluno aprovado.\n";
    }else if($media < 5.0){
        echo"Aluno reprovado.\n";
    }else if($media >= 5.0 && $media < 7){
        echo"Aluno em exame.\n";
        $ne = number_format(fgets(STDIN), 1, ".", "");
        echo"Nota do exame: $ne\n";
        $mediafinal = number_format((($media + $ne)/2),1, ".", "");
        if($mediafinal >=5){
            echo"Aluno aprovado.\n";
        }else{
            echo"Aluno reprovado.\n";
        }
        echo"Media final: $mediafinal\n"; 
    }
?>