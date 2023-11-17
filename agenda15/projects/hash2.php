<?php

$texto = "Técnico em Desenvolvimento de Sistemas";

foreach (hash_algos() as $v) {
    $codificado = hash($v, $texto, false);
    echo "Algoritmo: ".$v."<br>";
    echo "Tamanho: ".strlen($codificado)."<br>";
    echo "Texto Codificado: ".$codificado."<br>";
    echo "<br>";
}

?>