<?php 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    echo"<h1>$nome</h1>";
    echo"<h2>$idade</h2>";
    echo"<input value=$idade>";
    if(strlen($nome)<20){
        echo"<h3>Nome deve conter no mínimo 20 caracteres</h3>";
    }
    if($idade>=18){
        echo"<h3>Você é maior de idade</h3>";
    }else{
        echo"<h3>Você é menor de idade</h3>";
    }
    echo"<a href='form.html'><button>Voltar</button></a>";
?>