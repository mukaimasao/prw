<?php
    $h = readline();
    $kmh = readline();
    $dp = $kmh * $h;
    $ln = number_format($dp/12, 3, ".", "");
    echo"$ln\n";
?>
