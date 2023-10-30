<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"/></a>  
<h2>Estudando PHP! 🐘</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda12" align="center">
<h2>Agenda 12: Projeto Completo - Camada View.</h2>
</div>

- criar uma pasta View.
- desenvolver as seguintes páginas (Interfaces):
  - ***principais***:
    - 1. Login – Página para o usuário inserir seu cpf e senha para acessar o conteúdo dosite.
    - 2. Primeiro Acesso – Caso o usuário não for cadastrado e deseja realizar o primeiro acesso.
    - 3. Principal – Página central que gerenciará todas as informações do usuário.
  - ***secundárias***:
    - 1. Cadastro Realizado com sucesso / Não Realizado.
    - 2. Atualização Realizada com sucesso.
    - 3. Informação Inserida com sucesso.
    - 4. Informação Excluída com sucesso.
    - 5. Operação não realizada.

<div align="center">
<h2>Interfaces Principais</h2>
</div>

## 1. Interface Login

- criar o arquivo login.php:

~~~html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-wesome/4.7.0/css/font-awesome.min.css">
<title>EnlatadosJuarez</title>
</head>
<body>

</body>
</html>
~~~

- no &lt;body&gt;, criar um formulário com:
  - txtLogin: input do tipo text.
  - txtSenha: input do tipo text.
  -  btnLogin: button para realizar o login.
  -  btnPrimeiroAcesso: button realizar o cadastro.

~~~html
<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-display-middle" style="width: 600px">
  <input type="hidden" name="nome_form" value="frmLogin" />
  <h1 class="w3-center">Login</h1>
  <div class="w3-row w3-section">
    <div class="w3-col w3-center" style="width:11%"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtLogin" type="text" placeholder="Login CPF (ex.: 33333333333)">
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-col w3-center" style="width:11%"><i class="w3-xxlarge fa fa-lock"></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password"placeholder="Senha">
        </div>
      </div>
    <div class="w3-row w3-section">
    <div class="w3-half">
      <button name="btnLogin" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Entrar</button>
      </div>
    <div class="w3-half">
      <button name="btnPrimeiroAcesso" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Primeiro Acesso?</button>
    </div>
  </div>
</form>
~~~

## 2. Interface Primeiro Acesso

- será responsável pelos principais dados do usuário durante a realização do cadastro. 
- com o nome “primeiroAcesso”, novamente na pasta View, criar este arquivo PHP.
- no &lt;body&gt;, criar um formulário com:
  - txtNome: input do tipo text.
  - txtCPF: input do tipo text.
  - txtEmail: input do tipo text.
  - txtSenha: input do tipo password.
  - btnCadastrar: button para realizar o cadastro.

~~~html
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

<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle"
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
~~~

## 3. Interface Principal

- será responsável pelas alterações e inclusões de dados do usuário. 
- com o nome de “principal”, novamente na pasta View, criar este arquivo PHP. 
- como esta interface será a mais complexa e com maior conteúdo, o desenvolvimento será dividido em etapas.

### a) Etapa 1 - Estrutura Básica e Barra de Navegação

- definir a estrutura básica.
- criar a sidebar com os itens:
  - Home: link para indexar a parte inicial da página.
  - Dados Pessoais: link para indexar a parte referente a dados pessoais do usuário.
  - Formação: indexador da parte referente à formação acadêmica do usuário.

~~~html
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

</div>
</body>
</html>
~~~

### b) Etapa 2 - Home:

~~~html
<header class="w3-container w3-padding-32 w3-center" id="home">
  <img src="../Assets/images/logo-sistema-cvs.png" alt="Logo" class="w3-image" width="20%">
  </br>
  <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx / Freepik</a>
  <br>
  <h1 class="w3-text-cyan">SISTEMA DE CURRICULOS</h1>
</header>
~~~

### c) Etapa 3 - Dados pessoais:

- criar uma div para separar essa etapa das demais.
- criar um formulário contendo:
  - txtNome: input do tipo text.
  - txtCPF: input do tipo text.
  - txtData: input do tipo date. 
  - txtEmail: input do tipo text.
  - btnAtualizar: button realizar o cadastro.

~~~html
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
~~~

### d) Etapa 4 - Formação acadêmica:

- criar uma div para separar essa etapa das demais.
- adicionar um formulário contendo:
  - txtInicioFA: input do tipo date.
  - txtFimFA: input do tipo date.
  - txtDescrição: input do tipo text.
  - btnAtualizar: button realizar o cadastro.
- criar uma segunda div contrendo:
  - Início: apresentará a data inicial cadastrada pelo usuário.
  - Fim: apresentará a data final cadastrada pelo usuário.
  - Descrição: apresentará a descrição e a formação cadastrada pelo usuário.
  - Apagar: exibirá um botão para ser possível apagar essas formações.

~~~html
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
~~~

## 4. Interfaces secundárias

- são chamadas "Interfaces secundárias" por serem de caráter informativo para o usuário e servirem para redirecionar a navegação pelo projeto. 
- todas devem ter a mesma estrutura html:

~~~html
<!DOCTYPE html>
<html lang=" pt-BR ">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Document</title>
</head> 
<body>
</body>
</html>
~~~

- todas terão um formulário com botão:

~~~html
<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
  <div class="w3-row w3-section">
    <div>
      <button name="" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;"></button>
    </div>
  </div>
</form>
~~~

- elas terão no código 2 diferenças:
  - nome do botão.
  - texto do botão.

- para cada interface será criado um arquivo PHP na pasta model.
  - 1. Cadastro realizado com sucesso / não realizado.
  - 2. Atualização realizada com sucesso.
  - 3. Informação inserida com sucesso.
  - 4. Informação excluída com sucesso.
  - 5. Operação realizada sem sucesso.

### 1. Cadastro Realizado com sucesso:
- Nome do arquivo PHP - cadastroRealizado.php.
- Name botão - btnCadRealizado.
- Texto - Cadastro Realizado com sucesso!

~~~html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Enlatados Juarez</title>
</head>
<body class="">

<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
  <div class="w3-row w3-section">
    <div>
      <button name="btnCadRealizado" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Cadastro Realizado Com Sucesso!</button>
    </div>
  </div>
</form>

</body>
</html>
~~~

### 2. Atualização realizada com sucesso:
- Nome do arquivo PHP: atualizacaoRealizada.php.
- Name: btnAtualizacaoCadastro.
- Texto: Atualização Realizada com sucesso!

~~~html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Enlatados Juarez</title>
</head>
<body class="">

<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
  <div class="w3-row w3-section">
    <button name="btnAtualizacaoCadastro" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
      Atualização Realizada com sucesso!
    </button> 
  </div>
</form>

</body>
</html>
~~~

### 3. Cadastro não realizado:
- Nome do arquivo PHP: cadastroNaoRealizado.php.
- Name – btnCadNaoRealizado.
- Texto – Cadastro não realizado!

~~~html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Enlatados Juarez</title>
</head>
<body class="">

<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
  <div class="w3-row w3-section">
    <button name="btnCadNRealizado" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
      Cadastro não realizado!
    </button> 
  </div>
</form>

</body>
</html>
~~~

### 4. Informação Inserida com sucesso:
- Nome arquivo do PHP: informacaoInserida.php.
- Name: btnInfInserir.
- Texto: Atualização Realizada com sucesso!

~~~html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Enlatados Juarez</title>
</head>
<body class="">

<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
  <div class="w3-row w3-section">
    <button name="btnInfInserir" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
      Inclusão realizada com sucesso!
    </button> 
  </div>
</form>

</body>
</html>
~~~

### 5. Informação excluída com sucesso:
- Nome do arquivo PHP: informacaoExcluida.php.
- Name: btnInfExcluir.
- Texto: Exclusão Realizada Com Sucesso.

~~~html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Enlatados Juarez</title>
</head>
<body class="">

<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
  <div class="w3-row w3-section">
    <button name="btnInfExcluir" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
      Exclusão realizada com sucesso!
    </button> 
  </div>
</form>

</body>
</html>
~~~

### 6. Operação não realizada:
- Nome do arquivo PHP: operacaoNaoRealizada.php.
- Name: btnOperacaoNRealizada.
- Texto: Operação não realizada!

~~~html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0"> <meta
http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Enlatados Juarez</title>
</head>
<body class="">

<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
  <div class="w3-row w3-section">
    <button name="btnOperacaoNRealizada" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
      Operação não realizada!
    </button> 
  </div>
</form>

</body>
</html>
~~~

---

<div align="center">
<h2>VOCÊ NO COMANDO</h2>
</div>

1. Dentro do arquivo principal, crie uma outra divisão que servirá para inserção e remoção de experiências profissionais do usuário.
2. Dentro da divisão deverão ser desenvolvidos:
- a. Formulário contendo:
  - i. txtInicioEP –input tipo date;
  - ii. txtFimEP – input tipo date;
  - iii. txtEmpEP – input tipo text;
  - iv. txtDescEP – input tipo text;
  - v. btnAddEP – button;
- b. Tabela com os títulos:
  - i. Início 
  - ii. Fim 
  - iii. Empresa 
  - iv. Descrição 
  - v. Apagar

~~~php
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
~~~

---

<div align="center">
<h2>Fichário</h2>
</div>

- A equipe Beta entregou a camada View pronta para homologação, porém ocorreu um erro na documentação e ficou faltando a última etapa da página principa “OutrasFormações”. A Equipe Beta foi acionada para resolver esse problema o mais rápido possível.
- Para colocar em prática os assuntos estudados nessa agenda, você foi convidado a ajudar a equipe Beta a desenvolver a etapa da interface principal do projeto.

1. Crie dentro do arquivo principal outra divisão que servirá para inserção e remoção de outras formações do usuário.
2. Dentro da Divisão Desenvolva:
  - a. Formulário contendo:
    - i. txtInicioOF – input tipo date
    - ii. txtFimOF - input tipo date
    - iii. txtDescEP – input tipo text
    - iv. btnAddOF – button
  - b. Tabela com os títulos:
    - i. Início
    - ii. Fim
    - iii. Descrição
    - iv. Apagar

---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)