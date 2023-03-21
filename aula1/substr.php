<?php
    $data = date('d/m/Y');
    $dia = substr($data, 0,2);
    echo "Dia: " . $dia . "<br>";
    $mes = substr($data, 3,2);
    echo "Mês: " . $mes . "<br>";
    $ano = substr($data, 6);
    echo "Ano: " . $ano . "<br>";
    
?>