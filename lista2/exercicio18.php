<?php
    $e1 = explode(' ', readline());
    $e2 = explode(' ', readline());

    $di = intval($e1[1]);
    $hi = intval($e2[0]);
    $mi = intval($e2[2]);
    $si = intval($e2[4]);

    $e1 = explode(' ', readline());
    $e2 = explode(' ', readline());
    $df = intval($e1[1]);
    $hf = intval($e2[0]);
    $mf = intval($e2[2]);
    $sf = intval($e2[4]);

    $tsi = $di * 86400 + $hi * 3600 + $mi * 60 + $si;
    $tsf = $df * 86400 + $hf * 3600 + $mf * 60 + $sf;

    $ds = $tsf - $tsi;
    $dd = intval($ds / 86400);
    $ds %= 86400;
    $dh = intval($ds / 3600);
    $ds %= 3600;
    $dm = intval($ds / 60);
    $ds %= 60;

echo "{$dd} dia(s)" . PHP_EOL;
echo "{$dh} hora(s)" . PHP_EOL;
echo "{$dm} minuto(s)" . PHP_EOL;
echo "{$ds} segundo(s)" . PHP_EOL;
?>
