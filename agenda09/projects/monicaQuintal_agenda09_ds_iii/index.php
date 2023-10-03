<?php

  include_once 'Paciente.php';

  $a = new Paciente();
  $a->setNome("Monica");
  $a->setRG("11.111.111-1");
  $a->setCpf("111.111.111-11");
  $a->setEndereco("Rua A, 123");
  $a->setProfissao("Desenvolvedora");
  echo 'Nome: '.$a->getNome().'<br>';
  echo 'RG: '.$a->getRG().'<br>';
  echo 'CPF: '.$a->getCpf().'<br>';
  echo 'Endereço: '.$a->getEndereco().'<br>';
  echo 'Profissão: '.$a->getProfissao().'<br>';
  echo '<br>';

  $b = new Paciente();
  $b->setNome("João");
  $b->setRG("22.222.222-2");
  $b->setCpf("222.222.222-22");
  $b->setEndereco("Rua B, 456");
  $b->setProfissao("Desenvolvedor");
  echo 'Nome: '.$b->getNome().'<br>';
  echo 'RG: '.$b->getRG().'<br>';
  echo 'CPF: '.$b->getCpf().'<br>';
  echo 'Endereço: '.$b->getEndereco().'<br>';
  echo 'Profissão: '.$b->getProfissao().'<br>';
  echo '<br>';
  
?>