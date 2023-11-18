<?php

    $texto_original = "Utilizando password hash!";
    $texto_codificado = password_hash($texto_original, PASSWORD_DEFAULT);
    echo "<h1>Texto codificado: ".$texto_codificado."</h1><br>";

    if (password_verify("Utilizando password hash!", $texto_codificado)) {
        echo 'Texto Correto';
        } else {
        echo 'Texto Incorreto';
        }
        
?>