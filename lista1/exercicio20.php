<?php
    $n = readline();
    $a = number_format(floor($n/365),0, "", "");
    $m = number_format(floor(($n%365)/30), 0, "", "");
    $d = number_format(floor(($n%365)%30), 0, "", "");
    echo"$a ano(s)\n";
    echo"$m mes(es)\n";
    echo"$d dia(s)\n";
?>