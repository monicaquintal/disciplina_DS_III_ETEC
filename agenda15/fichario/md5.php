<?php 

$texto_original = 'Olá, eu sou a Mônica!';
$texto_codificado = md5($texto_original);
echo "<h1>Resultado do texto após codificação utilizando md5: " . $texto_codificado . "</h1>";

?>