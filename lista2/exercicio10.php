<?php
$entrada = readline();
$v = explode(" ", $entrada);
sort($v); 

if (($v[2] >= $v[1] + $v[0])) {
  echo "NAO FORMA TRIANGULO\n";
} else {

  if ($v[2]*$v[2] == $v[1]*$v[1] + $v[0]*$v[0]) {
    echo "TRIANGULO RETANGULO\n";
  }
  if ($v[2]*$v[2] > $v[1]*$v[1] + $v[0]*$v[0]) {
    echo "TRIANGULO OBTUSANGULO\n";
  }
  if ($v[2]*$v[2] < $v[1]*$v[1] + $v[0]*$v[0]) {
    echo "TRIANGULO ACUTANGULO\n";
  }
  if ($v[2] == $v[1] && $v[1] == $v[0]) {
    echo "TRIANGULO EQUILATERO\n";
  }
  if (($v[2] == $v[1] && $v[1] != $v[0]) || ($v[2] == $v[0] && $v[0] != $v[1]) || ($v[1] == $v[0] && $v[0] != $v[2])) {
    echo "TRIANGULO ISOSCELES\n";
  }
}

?>
