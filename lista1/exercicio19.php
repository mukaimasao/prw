<?php
    $n = readline();
    $h = number_format(floor(($n/60)/60),0, "", "");
    $m = number_format(floor(($n/60)%60), 0, "", "");
    $s = $n%60;
    echo"$h:$m:$s\n";
?>