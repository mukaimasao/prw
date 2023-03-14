<?php
    $din = readline();
    $nc = (int)number_format(floor($din/100), 0, "", "");
    $n = $din % 100;
    $ni = (int)number_format(floor($n/50), 0 ,"", "");
    $n = $n % 50;
    $nv = (int)number_format(floor($n/20), 0 ,"", "");
    $n = $n % 20;
    $nd = (int)number_format(floor($n/10), 0 ,"", "");
    $n = $n % 10;
    $nci = (int)number_format(floor($n/5), 0 ,"", "");
    $n = $n % 5;
    $ndo = (int)number_format(floor($n/2), 0 ,"", ""); 
    $n = $n % 2;
    $num = (int)number_format(floor($n/1), 0 ,"", "");

    echo "$din\n";
    echo "$nc nota(s) de R$ 100,00\n";
    echo "$ni nota(s) de R$ 50,00\n";
    echo "$nv nota(s) de R$ 20,00\n";
    echo "$nd nota(s) de R$ 10,00\n";
    echo "$nci nota(s) de R$ 5,00\n";
    echo "$ndo nota(s) de R$ 2,00\n";
    echo "$num nota(s) de R$ 1,00\n";
?>