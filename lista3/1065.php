<?php
$valores = [];
for ($i = 0; $i < 5; $i++) {
  $valores[$i] = (int) fgets(STDIN);
  if($valores[$i] % 2 == 0){
    $vp++;
  }
}
echo $vp . " valores pares\n";

?>
