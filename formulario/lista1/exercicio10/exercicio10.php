<?php
    $p = $_POST['p'];
    $m = $_POST['m'];
    $g = $_POST['g'];
    $total = number_format(($p * 10) + ($m*12) + ($g *15), 2, ".", "");

    echo"<h3>Preço total será de R$: $total</h3>";
    echo"<a href='exercicio10.html'><button>Voltar</button></a>";
?>