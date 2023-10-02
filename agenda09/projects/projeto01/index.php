<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda 09 - DS III</title>
</head>
<body>

<h2>

  <?php
    include_once 'Pessoa.php';
    include_once 'Fisica.php';
    include_once 'Juridica.php';

    $p = new Pessoa();
    $p->setNome("Monica");
    echo 'Nome: '.$p->getNome();
    echo '<br>';

    $f = new Fisica();
    $f->setCpf("111111111");
    echo 'CPF: '.$f->getCpf();
    echo '<br>';

    $j = new Juridica();
    $j->setCnpj("222222222");
    echo 'CNPJ: '.$j->getCnpj();
  ?>

</h2>

</body>
</html>