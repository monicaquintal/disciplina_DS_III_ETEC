<?php
    $texto = 'técnico em desenvolvimento de sistemas';
    $codificado = sha1($texto);
    echo "Resultado do texto codificação usando sha1: " . $codificado;
?>