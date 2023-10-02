<?php
  require_once 'Pessoa.php';

  class Juridica extends Pessoa {
    private $cnpj;

    public function setCnpj($cnpj) {
      $this->cnpj = $cnpj;
    }
    public function getCnpj() {
      return $this->cnpj;
    }
  }
?>
