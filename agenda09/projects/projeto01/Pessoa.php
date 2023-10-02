<?php
  class Pessoa {
    private $nome;
    public $sobrenome;

    public function setNome($nome) {
      $this->nome = $nome;
    }
  
    public function getNome() {
      return $this->nome;
    }
  }
?>