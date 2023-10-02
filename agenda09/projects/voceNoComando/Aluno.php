<?php
  require_once 'Pessoa.php';

  class Aluno extends Pessoa {

    private $curso;

    public function setCurso($curso) {
      $this->curso = $curso;
    }

    public function getCurso() {
      return $this->curso;
    }
  }
?>