<?php

while ($senha = trim(fgets(STDIN))) {
  if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', $senha)) {
    if (preg_match('/^[a-zA-Z0-9]*$/', $senha)) {
      if (strlen($senha) >= 6 && strlen($senha) <= 32) {
        echo "Senha valida.\n";
      } else {
        echo "Senha invalida.\n";
      }
    } else {
      echo "Senha invalida.\n";
    }
  } else {
    echo "Senha invalida.\n";
  }
}

?>
