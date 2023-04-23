<?php
    $prontuario = $_POST["prontuario"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $periodo = $_POST["periodo"];
    $modulo = $_POST["modulo"];

    $erros = array();

    if(empty($prontuario)) {
      $erros[] = "O campo prontuário não pode estar em branco.";
    }

    if(empty($nome)) {
      $erros[] = "O campo nome não pode estar em branco.";
    }

    if($idade < 15 || $idade > 75) {
      $erros[] = "A idade deve estar entre 15 e 75 anos.";
    }

    if($periodo != "V" && $periodo != "N") {
      $erros[] = "O período deve ser Vespertino (V) ou Noturno (N).";
    }

    if($modulo < 1 || $modulo > 4) {
      $erros[] = "O módulo deve estar entre 1 e 4.";
    }

    if(count($erros) > 0) {
      echo "<ul>";
      foreach($erros as $erro) {
        echo "<li>$erro</li>";
      }
      echo "</ul>";
    } else {
      echo "Formulário enviado com sucesso!";
      
    }
    echo"<a href='exercicio11.html'><button>Voltar</button></a>";
?>
