<?php
    $operacao = $_POST['operacao'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $resultado=0;
    if($operacao == 'somar'){
        $resultado = $n1+$n2;
    }else if($operacao == 'sub'){
        $resultado = $n1-$n2;
    }else if($operacao == 'dividir'){
        $resultado = $n1/$n2;
    }else if($operacao == 'mult'){
        $resultado = $n1*$n2;
    }
    echo"<h1>O resultado será: $resultado</h1>";
    echo"<a href='exercicio1.html'><button>Voltar</button></a>";
?>
