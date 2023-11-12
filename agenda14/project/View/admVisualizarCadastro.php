<?php 
  include_once '../Model/Usuario.php';
  include '../Controller/formacaoAcadController.php';
  include '../Controller/experienciaProfissionalController.php';
  include '../Controller/outrasFormacoesController.php';

  if(!isset($_SESSION)) {
    session_start();
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Visualizar Usuários Cadastrados</title>
</head>
<body>

  <?php 

    if (isset($_POST['idusuario'])) {
      $idusuario = $_POST['idusuario'];
      require_once '../Model/ConexaoBD.php';
      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM usuario WHERE idusuario = ".$idusuario;
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<h1 class='w3-text-white w3-panel w3-cyan w3-round-large w3-center'>" . $row["nome"]. " Curriculo</h1>";
              echo "<div class='w3-row w3-section w3-content'>";
              echo "<h3 class='w3-text-white w3-cyan w3-round-large w3-lg-col w3-padding'> Nome: " . $row["nome"]. "</h3>";
              echo "<h3 class='w3-text-white w3-cyan w3-round-large w3-lg-col w3-padding'> CPF: " . $row["cpf"]. "</h3>";
              echo "<h3 class='w3-text-white w3-cyan w3-round-large w3-lg-col w3-padding'> Email: " . $row["email"]. "</h3>";
              echo "<h3 class='w3-text-white w3-cyan w3-round-large w3-lg-col w3-padding'> Data de Nascimento: " . $row["dataNascimento"]. "</h3>";
          }
      $conn->close();
      }
    }
  ?>

  <div class="w3-container w3-margin-top">
    <h2 class="w3-text-cyan w3-center">Formação Acadêmica</h2>
    <table class="w3-table-all w3-centered">
      <thead>
        <tr class="w3-center w3-blue">
          <th>Início</th>
          <th>Fim</th>
          <th>Descrição</th>
        </tr>
        <thead>
        <?php 
        if (isset($_POST['idusuario'])) {
          $idusuario = $_POST['idusuario'];
          require_once '../Model/ConexaoBD.php';
          $con = new ConexaoBD();
          $conn = $con->conectar();
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM formacaoacademica WHERE idusuario = ".$idusuario;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td style="width: 10%;">'.$row["inicio"].'</td>';
                echo '<td style="width: 10%;">'.$row["fim"].'</td>';
                echo '<td style="width: 65%;">'.$row["descricao"].'</td>';
                echo '</tr>';
              }
          $conn->close();
          }
        }
        ?>
    </table>
  </div>
  
  <div class="w3-container w3-margin-top">
  <h2 class="w3-text-cyan w3-center">Experiência Profissional</h2>
    <table class="w3-table-all w3-centered">
      <thead>
        <tr class="w3-center w3-blue">
          <th>Início</th>
          <th>Fim</th>
          <th>Empresa</th>
          <th>Descrição</th>
        </tr>
      <thead>
      <?php 
        if (isset($_POST['idusuario'])) {
          $idusuario = $_POST['idusuario'];
          require_once '../Model/ConexaoBD.php';
          $con = new ConexaoBD();
          $conn = $con->conectar();
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM experienciaprofissional WHERE idusuario = ".$idusuario;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td style="width: 10%;">'.$row["inicio"].'</td>';
            echo '<td style="width: 10%;">'.$row["fim"].'</td>';
            echo '<td style="width: 10%;">'.$row["empresa"].'</td>';
            echo '<td style="width: 65%;">'.$row["descricao"].'</td>';
            echo '</tr>';
            }
          }
        }
      ?>
    </table>
  </div>

  <div class="w3-container w3-margin-top">
  <h2 class="w3-text-cyan w3-center">Outras Formações</h2>
    <table class="w3-table-all w3-centered">
      <thead>
        <tr class="w3-center w3-blue">
          <th>Início</th>
          <th>Fim</th>
          <th>Descrição</th>
        </tr>
        <thead>
        <?php 
          if (isset($_POST['idusuario'])) {
            $idusuario = $_POST['idusuario'];
            require_once '../Model/ConexaoBD.php';
            $con = new ConexaoBD();
            $conn = $con->conectar();
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM outrasformacoes WHERE idusuario = ".$idusuario;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td style="width: 10%;">'.$row["inicio"].'</td>';
                echo '<td style="width: 10%;">'.$row["fim"].'</td>';
                echo '<td style="width: 65%;">'.$row["descricao"].'</td>';
                echo '</tr>';
              }
            }
          }
        ?>
    </table>
  </div>







  <div class="w3-block w3-padding-128 w3-content w3-text-grey w3-center">
    <form action="../Controller/navegacao.php" method="post" class="w3-container w3-text-blue w3-margin">
      <div class="w3-row w3-section">
        <div class="">
          <button name="btnVoltar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large " style="width: 50%;">
            Voltar
          </button>
        </div>
      </div>
    </form>
  </div>

</body>
</html>