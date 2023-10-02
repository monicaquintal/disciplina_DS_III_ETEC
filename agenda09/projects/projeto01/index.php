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
    include_once 'Fisica.php';
    include_once 'Juridica.php';

    $f = new Fisica();
    $f->setNome("Monica");
    $f->setCpf("111111111");
    $f->mudarNome();
    echo 'Nome: '.$f->getNome().'<br>';
    echo 'CPF: '.$f->getCpf();
    echo '<br>';

    $j = new Juridica();
    $j->setNome("Monica LTDA");
    $j->setCnpj("222222222");
    echo 'Nome: '.$j->getNome().'<br>';
    echo 'CNPJ: '.$j->getCnpj();
  ?>

</h2>

</body>
</html>