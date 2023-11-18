<?php 
  $texto_original = 'Estudando criptografia com PHP.';
  $texto_codificado = sha1($texto_original);
  echo "<h1>Resultado do texto codificado usando sha1: " . $texto_codificado . "</h1>";
?>