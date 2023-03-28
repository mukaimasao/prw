<?php
    $entrada = explode(' ', fgets(STDIN));
    $A = floatval($entrada[0]);
    $B = floatval($entrada[1]);
    $C = floatval($entrada[2]);
    $t = number_format(($A*$C)/2.0, 3, ".", "");
    $c = number_format(3.14159 * $C * $C, 3, ".", "");
    $tra = number_format(($A+$B)*$C/2.0, 3, ".", "");
    $q = number_format($B*$B, 3, ".", "");
    $r = number_format($A*$B, 3, ".", "");
    echo"TRIANGULO: $t\n";
    echo"CIRCULO: $c\n";
    echo"TRAPEZIO: $tra\n";
    echo"QUADRADO: $q\n";
    echo"RETANGULO: $r\n";
?>
