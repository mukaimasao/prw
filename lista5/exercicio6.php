<?php

while ($sentenca = fgets(STDIN)) { 
    $nova_sentenca = '';
    $maiuscula = true;
    for ($i = 0; $i < strlen($sentenca); $i++) {
        $letra = $sentenca[$i];
        if ($letra == ' ') {
            $nova_sentenca .= ' '; 
        } else {
            if ($maiuscula) {
                $nova_sentenca .= strtoupper($letra);
            } else {
                $nova_sentenca .= strtolower($letra);
            }
            $maiuscula = !$maiuscula; 
        }
    }
    echo $nova_sentenca;
}