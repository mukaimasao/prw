<?php
    $estado = $_POST['estado'];
    $capital = '';
    if($estado == 'AC'){
        $capital = 'Rio Branco';
    }else if($estado == 'AL'){
        $capital = 'Maceió';
    }else if($estado == 'AP'){
        $capital = 'Macapá';
    }else if($estado == 'AM'){
        $capital = 'Manaus';
    }else if($estado == 'BA'){
        $capital = 'Salvador';
    }else if($estado == 'CE'){
        $capital = 'Fortaleza';
    }else if($estado == 'DF'){
        $capital = 'Brasília';
    }else if($estado == 'ES'){
        $capital = 'Vitória';
    }else if($estado == 'GO'){
        $capital = 'Goiânia';
    }else if($estado == 'MA'){
        $capital = 'São Luís';
    }else if($estado == 'MT'){
        $capital = 'Cuiabá';
    }else if($estado == 'MS'){
        $capital = 'Campo Grande';
    }else if($estado == 'MG'){
        $capital = 'Belo Horizonte';
    }else if($estado == 'PA'){
        $capital = 'Belém';
    }else if($estado == 'PB'){
        $capital = 'João Pessoa';
    }else if($estado == 'PR'){
        $capital = 'Curitiba';
    }else if($estado == 'PE'){
        $capital = 'Recife';
    }else if($estado == 'PI'){
        $capital = 'Teresina';
    }else if($estado == 'RJ'){
        $capital = 'Rio de Janeiro';
    }else if($estado == 'RN'){
        $capital = 'Natal';
    }else if($estado == 'RS'){
        $capital = 'Porto Alegre';
    }else if($estado == 'RO'){
        $capital = 'Porto Velho';
    }else if($estado == 'RR'){
        $capital = 'Boa Vista';
    }else if($estado == 'SC'){
        $capital = 'Florianópolis';
    }else if($estado == 'SP'){
        $capital = 'São Paulo';
    }else if($estado == 'SE'){
        $capital = 'Aracaju';
    }else if($estado == 'TO'){
        $capital = 'Palmas';
    }
    echo"<h3>A capital de $estado é $capital</h3>";
    echo"<a href='exercicio3.html'><button>Voltar</button></a>";
?>





