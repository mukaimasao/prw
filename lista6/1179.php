<?php

    $par = array();
$impar = array();
$qp = 0;
$qi = 0;

for ($i = 0; $i < 15; $i++)
{
    $x = intval(trim(fgets(STDIN)));

    if ($x % 2 == 0) {
        $par[$qp] = $x;
        $qp++;

        if ($qp == 5)
        {
            for ($j = 0; $j < 5; $j++)
            {
                echo "par[$j] = " . $par[$j] . PHP_EOL;
            }
            $qp = 0;
        }
    } else {
        $impar[$qi] = $x;
        $qi++;

        if ($qi == 5)
        {
            for ($j = 0; $j < 5; $j++)
            {
                echo "impar[$j] = " . $impar[$j] . PHP_EOL;
            }
            $qi = 0;
        }
    }
}

for ($j = 0; $j < $qi; $j++)
{
    echo "impar[$j] = " . $impar[$j] . PHP_EOL;
}

for ($j = 0; $j < $qp; $j++)
{
    echo "par[$j] = " . $par[$j] . PHP_EOL;
}


?>
