<?php

    $texto = "Técnico em Desenvolvimento de Sistemas";
    $codificado = password_hash($texto, PASSWORD_DEFAULT);
    echo "Texto Codificado: ".$codificado."<br>";

    if (password_verify("Técnico em Desenvolvimento de Sistemas", $codificado)) {
        echo 'Texto Correto';
        } else {
        echo 'Texto Incorreto';
        }
        
?>