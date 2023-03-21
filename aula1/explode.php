<?php
    $data = date('d/m/Y');
    echo $data . "<br>";
    $d = explode('/', $data);

    echo "Dia: " . $d[0] . "<br>";
    echo "Mês: " . $d[1] . "<br>";
    echo "Ano: " . $d [2]. "<br>";
    
    $str = "IFSP Campus Birigui";
    $p = explode(' ', $str);
    echo "Palavra 1: " . $p[0] . "<br>";
    echo "Palavra 2: " . $p[1] . "<br>";
    echo "Palavra 3: " . $p[2] . "<br>";
?>