<?php

$texto = 'Técnico em Desenvolvimento de Sistemas';
$criptografada = base64_encode($texto);
echo "Resultado da criptografia usando base64: " . $criptografada."<br>";
$textoOriginal = base64_decode($criptografada);
echo "Resultado da decodificação usando base64: " . $textoOriginal;

?>