<?php

if(!isset($_SESSION)) {
  session_start();
}

class outrasFormacoesController{

  // Inserir
  public function inserir($inicio, $fim, $descricao, $idusuario) {
    require_once '../Model/OutrasFormacoes.php';
      $outrasformacoes = new OutrasFormacoes();
      $outrasformacoes->setInicio($inicio);
      $outrasformacoes->setFim($fim);
      $outrasformacoes->setDescricao($descricao);
      $outrasformacoes->setIdUsuario($idusuario);
      $r = $outrasformacoes->inserirBD();
      return $r;
    }

  // Remover
  public function remover($idoutrasformacoes) {
    require_once '../Model/OutrasFormacoes.php';
    $outrasformacoes = new OutrasFormacoes();
    $r = $outrasformacoes->excluirBD($idoutrasformacoes);
    return $r;
  }

  // Gerar Lista
  public function gerarLista($idusuario) {
    require_once '../Model/OutrasFormacoes.php';
    $outrasformacoes = new OutrasFormacoes();
    return $results = $outrasformacoes->listaFormacoes($idusuario);
  }

}

?>