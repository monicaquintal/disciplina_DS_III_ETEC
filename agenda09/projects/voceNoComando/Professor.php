<?php
  require_once 'Pessoa.php';

  class Professor extends Pessoa {

    private $formacao;

    public function setFormacao($formacao) {
      $this->formacao = $formacao;
    }

    public function getFormacao() {
      return $this->formacao;
    }
  }
?>