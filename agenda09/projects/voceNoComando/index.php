<?php

  include_once 'Aluno.php';
  include_once 'Professor.php';

  $a = new Aluno();
  $a->setNome("José");
  $a->setCpf("111.111.111.11");
  $a->setCurso("Técnico em Desenvolvimento de Sistemas");
  echo 'Nome: '.$a->getNome().'<br>';
  echo 'CPF: '.$a->getCpf().'<br>';
  echo 'Curso: '.$a->getCurso().'<br>';
  echo '<br>';

  $p = new Professor();
  $p->setNome("Paulo");
  $p->setCpf("222.222.222.22");
  $p->setFormacao("Ciência da Computação");
  echo 'Nome: '.$p->getNome().'<br>';
  echo 'CPF: '.$p->getCpf().'<br>';
  echo 'Formacao: '.$p->getFormacao().'<br>';
  echo '<br>';
  
?>