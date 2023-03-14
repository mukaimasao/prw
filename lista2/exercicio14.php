<?php
    $p1 = readline();
    $p2 = readline();
    $p3 = readline();


    switch($p1){
        case "vertebrado":
            switch($p2){
                case "ave":
                    switch($p3){
                        case "carnivoro":
                            $pf = "aguia";
                            break;
                        case "onivoro":
                            $pf = "pomba";
                            break;
                    }
                    break;
                case "mamifero":
                    switch($p3){
                        case "onivoro":
                            $pf = "homem";
                            break;
                        case "herbivoro":
                            $pf = "vaca";
                            break;
                    }
                    break;
            }
        case "invertebrado":
            switch($p2){
                case "inseto":
                    switch($p3){
                        case "hematofago":
                            $pf = "pulga";
                            break;
                        case "herbivoro":
                            $pf = "lagarta";
                            break;
                    }
                    break;
                case "anelideo":
                    switch($p3){
                        case "hematofago":
                            $pf = "sanguessuga";
                            break;
                        case "onivoro":
                            $pf = "minhoca";
                            break;
                    }
                    break;
            }
    }
    echo"$pf\n";
    
?>