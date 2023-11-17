<?php

$texto = 'Técnico em Desenvolvimento de Sistemas';
$criptografada = hash('ripemd160', $texto);
echo "Resultado da criptografia usando função Hash com o algoritmo ripem160: " .
$criptografada."<br>";
$texto = 'Técnico em Desenvolvimento de Sistemas';
$criptografada = hash('sha256', $texto);
echo "Resultado da criptografia usando função Hash com o algoritmo sha256: " .
$criptografada."<br>";

?>