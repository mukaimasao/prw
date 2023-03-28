<?php
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++)
{
    $entrada = fgets(STDIN);
    $values = explode(" ", $entrada);
    $x = intval($values[0]);
    $y = intval($values[1]);

    $soma = 0;
    for ($j = $x; $j < $x + ($y * 2); $j++)
    {
        if ($j % 2 != 0)
        {
            $soma += $j;
        }
    }
    echo $soma . "\n";
}
?>
