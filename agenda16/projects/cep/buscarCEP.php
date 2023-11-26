<?php 

  function get_endereco($cep) {
    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
  }

  $endereco = get_endereco($_POST["txtCEP"]);

  echo "Rua: $endereco->logradouro";
  echo "<br>";
  echo "Complemento: $endereco->complemento";
  echo "<br>";
  echo "Bairro: $endereco->bairro";
  echo "<br>";
  echo "Cidade: $endereco->localidade";
  echo "<br>";
  echo "Estado: $endereco->uf";
  echo "<br>";
  echo "<br>";

?>