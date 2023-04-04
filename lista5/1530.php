<?php

// Exemplo de uso:
$str = "aba";
$substrings = array();
    $len = strlen($str);

    for ($i = 0; $i < $len; $i++) {
        for ($j = $i; $j < $len; $j++) {
            $sub = substr($str, $i, $j - $i + 1);
            if (!in_array($sub, $substrings)) {
                array_push($substrings, $sub);
            }
        }
    }
foreach($substrings as $valor){
    echo $valor . PHP_EOL;
}


?>


<?php

// Exemplo de uso:
$str = "abc?abc?";
$stra = str_replace("?", "", $str);
$substrings = array();
    $len = strlen($stra);
    
    for ($i = 0; $i < $len; $i++) {
        for ($j = $i; $j < $len; $j++) {
            $sub = substr($stra, $i, $j - $i + 1);
            if (!in_array($sub, $substrings)) {
                array_push($substrings, $sub);
            }
        }
    }
    $count = count($substrings);
foreach($substrings as $valor){
    if($valor == $stra){
        $count;
    }
}
    
    echo $count;



?>

