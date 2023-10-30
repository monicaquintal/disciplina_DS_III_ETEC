<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Enlatados Juarez</title>

<style>
  /* A sidebar terá largura de 120px e cor de fundo #222 */
  .w3-sidebar {
    width: 120px;
  }

  /* Define a fonte para todas as tags listadas*/
  body, h1, h2, h3, h4, h5, h6 {
    font-family: "Montserrat", sans-serif;
  }

</style>

</head>
<body class="">

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-center w3-blue">
  <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-textlight-grey">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
    <i class="fa fa-address-book w3-xxlarge"></i>
    <p>Dados Pessoais</p>
  </a>
  <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
    <i class="fa fa-graduation-cap w3-xxlarge"></i>
    <p>Formação</p>
  </a>
</nav>

<!-- Conteúdo principal -->
<div class="w3-padding-large" id="main">

<header class="w3-container w3-padding-32 w3-center" id="home">
  <img src="../Assets/images/logo-sistema-cvs.png" alt="Logo" class="w3-image" width="20%">
  </br>
  <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx / Freepik</a>
  <br>
  <h1 class="w3-text-cyan">SISTEMA DE CURRICULOS</h1>
</header>

<!-- Dados pessoais -->
<div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
  <h2 class="w3-text-cyan">Dados Pessoais</h2>
  <form action="" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin w3-round-large" style="width:70%;">
    <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden"value="">
    <div class="w3-row w3-section">
      <div class="w3-col w3-center" style="width:11%;">
        <i class="w3-xxlarge fa fa-user"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtNome" type="text"placeholder="Nome Completo" value="">
      </div>
    </div>
  </form>
</div>

<!-- Formação acadêmica -->
<div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
  <h2 class="w3-text-cyan">Formação</h2>
  <form action="" method="post" class="w3-round-large w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
    <div class="w3-row w3-center">
      <div class="w3-col" style="width:50%;">
        Data Inicial
      </div>
      <div class="w3-res">
        Data Final
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-row w3-section w3-col" style="width:45%;">
        <div class="w3-col" style="width:15%;">
          <i class="w3-xxlarge fa fa-calendar"></i>
        </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">
      </div>
    </div>
    <div class="w3-row w3-section w3-rest">
      <div class="w3-col w3-margin-left" style="width:13%;">
        <i class="w3-xxlarge fa fa-calendar"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">
      </div>
    </div>
    <div>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:7%;">
        <i class="w3-xxlarge fa fa-align-justify"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text"
      placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-center">
        <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
          <i class="w3-xxlarge fa fa-user-plus"></i>
        </button>
      </div>
    </div>
  </form>

  <div class="w3-container">
    <table class="w3-table-all w3-centered">
      <thead>
        <tr class="w3-center w3-blue">
          <th>Início</th>
          <th>Fim</th>
          <th>Descrição</th>
          <th>Apagar</th>
        </tr>
      <thead>
    </table>
  </div>
</div>
</div>

<!-- Experiência Profissional -->
<div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional">
  <h2 class="w3-text-cyan">Experiência Profissional</h2>
  <form action=" " method="post" class="w3-round-large w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
    <div class="w3-row w3-center">
      <div class="w3-col" style="width:50%;">
        Data Inicial
      </div>
      <div class="w3-res">
        Data Final
      </div>
    </div>
  <div class="w3-row w3-section">
  <div class="w3-row w3-section w3-col" style="width:45%;">
    <div class="w3-col" style="width:15%;">
      <i class="w3-xxlarge fa fa-calendar"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
    </div>
  </div>
  <div class="w3-row w3-section w3-rest">
    <div class="w3-col w3-margin-left" style="width:13%;">
      <i class="w3-xxlarge fa fa-calendar"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
    </div>
  </div>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:7%;">
        <i class="w3-xxlarge fa fa-align-justify"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Centro Paula Souza">
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:7%;">
        <i class="w3-xxlarge fa fa-align-justify"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-center">
        <button name="btnAddEP" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
          <i class="w3-xxlarge fa fa-user-plus"></i>
        </button>
      </div>
    </div>
  </div>
</form>

<div class="w3-container">
  <table class="w3-table-all w3-centered">
    <thead>
      <tr class="w3-center w3-blue">
      <th>Início</th>
      <th>Fim</th>
      <th>Empresa</th>
      <th>Descrição</th>
      <th>Apagar</th>
    </thead>

    <?php

    $ePro = new ExperienciaProfissionalController();
    $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());if($results != null)
    
    while ($row = $results->fetch_object()) {
      echo '<tr>';
      echo '<td style="width: 10%;">'.$row->inicio.'</td>';
      echo '<td style="width: 10%;">'.$row->fim.'</td>'; 
      echo '<td style="width: 10%;">'.$row->empresa.'</td>';
      echo '<td style="width: 65%;">'.$row->descricao.'</td>';
      echo '<td style="width: 5%;">
        <form action="/Controller/Navegacao.php" method="post">
        <input type="hidden" name="idEP" value="'.$row->idexperienciaprofissional.'">
        <button name="btnExcluirEP" class="w3-button w3-block w3-blue w3-cell w3-round-large">
        <i class="fa fa-user-times"></i> </button></td>
        </form>';
      echo '</tr>';
    }

    ?>

  </table>
</div>

</body>
</html>