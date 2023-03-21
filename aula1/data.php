<?php 
    date_default_timezone_get('America/Sao_Paulo');

    echo"Data atual" . date('d/m/y') . PHP_EOL;
    echo"Data atual" . date('d-m/-') . PHP_EOL;
    echo"Data e hora atual" . date('d/m/Y H:i:s') . PHP_EOL;
    
    $data_hoje = date('d/m/y');

    echo $data_hoje;
?>