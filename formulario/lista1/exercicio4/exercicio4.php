<?php
    $ano = $_POST['ano'];
    if($ano%4 ==0 && $ano%100 !=0){
        echo"<h3>$ano é um ano bissexto</h3>";
    }else if($ano%400 ==0){
        echo"<h3>$ano é um ano bissexto</h3>";
    }else{
        echo"<h3>$ano não é um ano bissexto</h3>";
    }

    echo"<a href='exercicio4.html'><button>Voltar</button></a>";
?>