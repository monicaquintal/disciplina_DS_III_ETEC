<?php
  class Pessoa {
    
    private $nome;
    private $cpf;

    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function getNome() {
      return $this->nome;
    }

    public function setCpf($cpf) {
      $this->cpf = $cpf;
    }

    public function getCpf() {
      return $this->cpf;
    }

  }
?>
