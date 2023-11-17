<?php
    $texto = $_POST["txtTexto"];
    $codificado = md5($texto);
    echo "Senha codificada ".$texto." em MD5: ".$codificado."<br>";
?>