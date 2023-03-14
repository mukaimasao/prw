<?php
$grenais = $inter_vitorias = $gremio_vitorias = $empates = 0;

do {
    list($interg, $gremiog) = explode(" ", fgets(STDIN));
    
    if ($interg > $gremiog) {
        $inter_vitorias++;
    } elseif ($gremiog > $interg) {
        $gremio_vitorias++;
    } else {
        $empates++;
    }
    
    $grenais++;
    do {
        echo "Novo grenal (1-sim 2-nao)\n";
        $opcao = intval(fgets(STDIN));
    } while ($opcao != 1 && $opcao != 2);
} while ($opcao == 1);

echo $grenais . " grenais\n";
echo "Inter:" . $inter_vitorias . "\n";
echo "Gremio:" . $gremio_vitorias . "\n";
echo "Empates:" . $empates . "\n";

if ($inter_vitorias > $gremio_vitorias) {
    echo "Inter venceu mais\n";
} elseif ($gremio_vitorias > $inter_vitorias) {
    echo "Gremio venceu mais\n";
} else {
    echo "Nao houve vencedor\n";
}
?>
