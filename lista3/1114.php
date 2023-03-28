<?php
    while(true){
        $senha = intval(fgets(STDIN));
        if($senha == 2002){
            echo"Acesso Permitido\n";
            break;
        }else{
            echo"Senha Invalida\n";
        }
    }

?>
