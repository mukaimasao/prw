<?php
    $name = $_POST['name'];
    $idade = $_POST['idade'];
    $diasT = $idade*365;

    echo"<h3>Sua idade total são <b>$diasT</b> dias</h3>"; 
    echo"<a href='exercicio7.html'><button>Voltar</button></a>";
?>