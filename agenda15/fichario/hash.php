<?php

$texto_original = "Agenda 15 de Desenvolvimento de Sistemas III";

foreach (hash_algos() as $algoritmo) {
    $texto_codificado = hash($algoritmo, $texto_original, false);
    echo "Algoritmo: ".$algoritmo."<br>";
    echo "Tamanho: ".strlen($texto_codificado)."<br>";
    echo "Texto Codificado: ".$texto_codificado."<br>";
    echo "<br>";
}

?>