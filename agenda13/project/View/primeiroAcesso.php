<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Primeiro Acesso</title>
</head>
<body class="">

<form action="../Controller/navegacao.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle"
style="width: 600px">
  <h2 class="w3-center">Primeiro Acesso</h2>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%;">
      <i class="w3-xxlarge fa fa-user"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo">
    </div>
  </div>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%;">
      <i class="w3-xxlarge fa fa-address-card"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF: 33333333333">
    </div>
  </div>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%;">
      <i class="w3-xxlarge fa fa-calendar"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="dataNascimento" type="date" placeholder="Data de Nascimento: DD/MM/AAAA">
    </div>
  </div>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%;">
      <i class="w3-xxlarge fa fa-envelope"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email">
    </div>
  </div>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%">
      <i class="w3-xxlarge fa fa-lock"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password"placeholder="Senha">
    </div>
  </div>
  <div class="w3-row w3-section">
    <div class="w3-center">
      <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Cadastrar</button>
    </div>
  </div>
</form>

</body>
</html>
