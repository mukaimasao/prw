<?php
while ($input = fgets(STDIN)) {
  $num = floatval(trim($input));
  $cutoff = floatval(trim(fgets(STDIN)));

  $integer_part = intval($num);
  $decimal_part = $num - $integer_part;
  
  $cutoff_decimal_part = $cutoff - intval($cutoff);
  if ($decimal_part > $cutoff_decimal_part) {
    echo $integer_part + 1 . PHP_EOL;
  } else {
    echo $integer_part . PHP_EOL;
  }
}

?>
