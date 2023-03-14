<?php
$al =0;
$ga =0;
$di =0;
while (true) {
    $num = intval(readline());

    if ($num == 4) {
        break;
    }

    switch ($num) {
        case 1:
            $al += 1;
            break;
        case 2:
            $ga += 1;
            break;
        case 3:
            $di += 1;
            break;
        default:
            continue;
    }
}
echo "MUITO OBRIGADO\n";
echo "Alcool: $al\n";
echo "Gasolina: $ga\n";
echo "Diesel: $di\n";

?>
