<?php
  require_once 'Pessoa.php';
  class Fisica extends Pessoa {
    private $cpf;

    public function setCpf($cpf) {
      $this->cpf = $cpf;
    }
    public function getcpf() {
      return $this->cpf;
    }
  }
?>
