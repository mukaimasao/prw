<?php
    $raio = readline();
    $VOLUME = number_format(4/3 * 3.14159 * $raio * $raio * $raio, 3, ".", "");

    echo "VOLUME = $VOLUME\n";
?>
