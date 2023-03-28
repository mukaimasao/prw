<?php
$n = (int)readline();

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", readline());

    $qtd = (int)$input[0];
    $tipo = $input[1];
    $total += $qtd;

    if ($tipo == "C") {
        $c+= $qtd;
    } elseif ($tipo == "R") {
        $r += $qtd;
    } elseif ($tipo == "S") {
        $s += $qtd;
    }
}

$cp = ($c / $total) * 100;
$rp = ($r / $total) * 100;
$sp = ($s / $total) * 100;

echo "Total: " . $total . " cobaias\n";
echo "Total de coelhos: " . $c . "\n";
echo "Total de ratos: " . $r . "\n";
echo "Total de sapos: " . $s . "\n";
echo "Percentual de coelhos: " . number_format($cp, 2) . " %\n";
echo "Percentual de ratos: " . number_format($rp, 2) . " %\n";
echo "Percentual de sapos: " . number_format($sp, 2) . " %\n";

?>
