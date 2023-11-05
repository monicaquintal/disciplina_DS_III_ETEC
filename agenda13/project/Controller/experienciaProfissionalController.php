<?php
  if(!isset($_SESSION)) {
    session_start();
  }

  class ExperienciaProfissionalController {

    // Inserir
    public function inserir($inicio, $fim, $empresa, $descricao,$idusuario) {
      require_once '../Model/ExperienciaProfissional.php';
      $expP = new ExperienciaProfissional();
      $expP->setInicio($inicio);
      $expP->setFim($fim);
      $expP->setEmpresa($empresa);
      $expP->setDescricao($descricao);
      $expP->setIdUsuario($idusuario);
      $r = $expP->inserirBD();
      return $r;
    }

    // Remover
    public function remover($id) {
      require_once '../Model/ExperienciaProfissional.php';
      $expP = new ExperienciaProfissional();
      $r = $expP->excluirBD($id);
      return $r;
    }

    // Gerar lista
    public function gerarLista($idusuario) {
      require_once '../Model/ExperienciaProfissional.php';
      $expP = new ExperienciaProfissional();
      return $results = $expP->listaExperiencias($idusuario);
    }
  }
?>