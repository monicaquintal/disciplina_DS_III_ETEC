<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"/></a>  
<h2>Estudando PHP! 🐘</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda14" align="center">
<h2>Agenda 14: Módulo Administrador - Atualização MVC.</h2>
</div>

- a arquitetura de camadas MVC:
  - possibilita integração e divisão de tarefas entre equipes.
  - facilita o reaproveitamento de códigos.
  - mantém a codificação limpa, diminuindo a complexidade do sistema.
- as alterações realizadas em uma das camadas não interfere nas demais, facilitando a alteração nas regras de negócio, a atualização de layouts e a adição de novos recursos.
- na arquitetura MVC, você sabe onde ficam as regras de negócio e a maioria dos frameworks já vem com uma estrutura de diretórios pronta, e no caso de uma atualização, consegue localizar facilmente os arquivos.
- nessa agenda, acompanhamos um processo de atualização.

## 1. Banco de Dados:

- tabela de administradores, utilizada como meio de login para o painel a ser desenvolvido.

~~~sql
-------------------------------------------------------
-------- Table `projeto_final`.`administrador` --------
-------------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_final`.`administrador` (
 `idadministrador` INT(11) NOT NULL AUTO_INCREMENT,
 `nome` VARCHAR(45) NULL DEFAULT NULL,
 `cpf` VARCHAR(11) NOT NULL,
 `senha` VARCHAR(45) NOT NULL,
 PRIMARY KEY (`idadministrador`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;
~~~

- inserir por meio de SQL um usuário administrador. 

~~~sql
INSERT INTO `projeto_final`.`administrador` (`nome`, `cpf`, `senha`)
VALUES ('admin', '12345678900', 'admin');
~~~

## 2. Camada Model

- modelar a classe Administrador.
- será responsável por gerenciar os dados dos administradores do projeto. 
- criar o arquivo Administrador.php dentro da pasta Model.
- atributos:
  - idadministrador: código único de cada registro de administrador.
  - nome: nome do administrador.
  - cpf: cpf do administrador.
  - senha: senha para acesso ao painel.

~~~php
class Administrador {
  private $id;
  private $nome;
  private $cpf;
  private $senha;
}
~~~

- criar os métodos getters e setters.

~~~php
// ID
public function setID($id) {
  $this->id = $id;
}

public function getID() {
  return $this->id;
}

// Nome
public function setNome($nome) {
  $this->nome = $nome;
}

public function getNome() {
  return $this->nome;
}

// cpf
public function setCPF($cpf) {
  $this->cpf = $cpf;
}

public function getCPF() {
  return $this->cpf;
}

// Senha
public function setSenha($senha) {
  $this->senha = $senha;
}

public function getSenha() {
  return $this->senha;
}
~~~

- desenvolver um método específico, que será o carregarAdministrador.

~~~php
public function carregarAdministrador($cpf) {
  require_once 'ConexaoBD.php';
  $con = new ConexaoBD();
  $conn = $con->conectar();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM administrador WHERE cpf = ".$cpf ;
  $re = $conn->query($sql);
  $r = $re->fetch_object();
  if($r != null) {
    $this->id = $r->idadministrador;
    $this->nome = $r->nome;
    $this->cpf = $r->cpf;
    $this->senha = $r->senha;
    $conn->close();
    return true;
  } else {
    $conn->close();
    return false;
  }
}
~~~

- este método segue o mesmo padrão dos que foram desenvolvidos nas agendas anteriores:
  - inclusão da Classe ConexaoBD.
  - instância do Objeto da Classe ConexãoBD.
  - conexão ao Banco de Dados, com verificação do sucesso ou não.
  - confeção da sentença SQL.
  - execução da sentença com verificação do sucesso ou não.

### Importante:

- como foi solicitado para que seja possível listar todos os usuários, realizar uma atualização na `classe Usuário`, que sofrerá a inclusão de um novo
método específico:

~~~php
public function listaCadastrados() {
  require_once 'ConexaoBD.php';
  $con = new ConexaoBD();
  $conn = $con->conectar();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT idusuario, nome FROM usuario;" ;
  $re = $conn->query($sql);
  $conn->close();
  return $re;
}
~~~

- este método segue o mesmo padrão:
  - inclusão da Classe ConexaoBD.
  - instância do Objeto da Classe ConexãoBD.
  - conexão ao Banco de Dados, com verificação do sucesso ou não.
  - confeção da sentença SQL.
- porém, este método retorna o resultado da consulta do Banco de Dados que pode ser um ou mais registros.
- serão retornados todos os usuários cadastrados na tabela usuário.

## 2. Camada View

- criar a camada View para apresentar e interagiar com o usuário final, possibilitando a visualização do projeto.
- toda a interface faz parte dessa camada: os dados, as informações e os gráficos.
- desenvolver as seguintes páginas (Interfaces):
  - Login: Página para o administrador inserir seu CPF e senha para acessar o conteúdo do painel.
  - Principal: Página central que gerenciará todas as informações do usuário.
  - Listar Cadastrados: fará uma lista com todos os usuários cadastrados.

### a) Interface Login:

- será responsável por realizar a interação com o administrador, por meio do login.
- o CPF será “login”.
- criar o arquivo PHP denominado ADMLogin.
- o desenvolvimento desta interface será baseado no mesmo layout do login do usuário.

~~~php
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
<title>Administrador</title>
</head>
<body>
</body>
</html>
~~~

- dentro da tag &lt;body&gt;, criar um formulário com: 
  - txtLoginADM: input do tipo text.
  - txtSenhaADM: input do tipo password.
  - btnLoginADM: button para realizar o login.

~~~php
<form action="../Controller/navegacao.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
  <input type="hidden" name="nome_form" value="frmLoginADM" />
  <h2 class="w3-center">Administrador</h2>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%">
      <i class="w3-xxlarge fa fa-user"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtLoginADM" type="text" placeholder="Login CPF (ex.: 33333333333)">
    </div>
  </div>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%">
      <i class="w3-xxlarge fa fa-lock"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtSenhaADM" type="password" placeholder="Senha">
    </div>
  </div>
  <div class="w3-row w3-section">
    <div class="">
      <button name="btnLoginADM" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">Entrar</button>
    </div>
  </div>
</form>
~~~

### b) Interface Principal:

- responsável por toda a gerencia administrativa, que ainda é simples porque o único recurso solicitado é listar todos os usuários cadastrados.
- com o nome “admPrincipal”, dentro da pasta View, criar este arquivo php.

~~~php
<!DOCTYPE html>
<html lang=”pt-br”>
<head>
  <meta charset=”UTF-8”>
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
  <meta http-equiv=”X-UA-Compatible” content=”ie=edge”>
  <link rel=”stylesheet” href=”style.css”>
  <link rel=”stylesheet” href=”https://www.w3schools.com/w3css/4/w3.css”>
  <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css”>
  <title>Painel de Administração</title>
  <style>
    body, h1, h2, h3, h4, h5, h6 {
      font-family: “Montserrat”, sans-serif
    }
  </style>
</head>
<body class=”w3-light-grey”>
</body>
</html>
~~~

- inserir verificação e abertura da sessão.

~~~php
if(!isset($_SESSION)) {
  session_start();
}
~~~

- dentro das tags body, criar uma div responsável pelo conteúdo do painel. 

~~~php
<div class="w3-padding-large" id="main">
</div>
~~~

- criar um cabeçalho simples com dois títulos: Administração e Sistema de Currículos.

~~~php
<header class="w3-container w3-padding-32 w3-center" id="home"><br>
  <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">ADMINISTRAÇÃO</h1>
  <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">SISTEMA DE CURRICULOS</h1>
</header>
~~~

- criar um formulário com a função de agregar todas as funções e futuras atualizações requeridas.

~~~php
<form action="/Controller/navegacao.php" method="post" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center" style="">
  <input type="hidden" name="nome_form" value="frmLoginADM" />
  <button name="btnListarCadastrados" class="w3-button w3-margin w3-blue w3-cell w3-
  round-large" style="">
  <br>
  <i class="fa fa-address-book-o w3-xxlarge"></i><br>
  <p class="w3-xlarge">Usuários<br>
  Cadastrados</p>
  </button>
</form>
~~~

### c) Interface admListarCadastrados:

- responsável por exibir uma lista com todos os usuários.

~~~php
if(!isset($_SESSION)) {
  session_start();
}

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<title>Usuários Cadastrados</title>
</head>
<body>
  <header class="w3-container w3-padding-32 w3-center">
    <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
      Lista de Usuários Cadastrados no Sistema
    </h1>
  </header>
  <div class="w3-padding-128 w3-content w3-text-grey" >
    <div class="w3-container">
      <table class="w3-table-all w3-centered">
        <thead>
          <tr class="w3-center w3-blue">
            <th>Código</th>
            <th>Nome</th>
          </tr>
        <thead>
      </table>
    </div>
  </div>
  <div class="w3-padding-128 w3-content w3-text-grey w3-center">
    <form action="../Controller/navegacao.php" method="post" class="w3-container w3-light-grey w3-text-blue w3-margin " style="width: 30%;">
      <div class="w3-row w3-section">
        <div class="">
          <button name="btnVoltar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
            Voltar
          </button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
~~~

## 3. Camada Controller

- camada responsável pelo fluxo de informação que passa pelo site. 
- gerará e definirá quais dados ou regras devem ser acionadas e para onde serão encaminhadas para serem exibidas posteriormente.

### a) Login:

- criar um arquivo na camada controller chamado “AdministradorController”.
- será responsável pelo controle de todas as ações que forem necessárias e pelo acesso de dados dos objetos instanciados na classe administrador. 

~~~php
if(!isset($_SESSION)) {
  session_start();
}

class AdministradorController{
  public function login($cpf, $senha) {
    require_once '../Model/Administrador.php';
    $administrador = new Administrador();
    $administrador->carregarAdministrador($cpf);

    if ($administrador->getSenha() == $senha) {
      $_SESSION['Administrador'] = serialize($administrador);
      return true;
      
    } else {
      return false;
    }
  }
}
~~~

- o administrador deve realizar o login com CPF e senha cadastrados. 
- nesse arquivo, desenvolver a condição para quando o administrador pressionar o botão Entrar (btnLoginADM), possa realizar o procedimento de verificação para saber se ele já está cadastrado. 

~~~php
if (isset($_POST["btnLoginADM"])) 
  require_once '../Controller/AdministradorController.php';
  $aController = new AdministradorController();
  if($aController->login($_POST['txtLoginADM'], $_POST['txtSenhaADM'])) {
    include_once '../View/admPrincipal.php';
  } else {}        
~~~

- criar, na interface login de usuário, um botão para redirecionar o  administrador para sua tela de login. 

~~~php
<div class="w3-center" style="">
  <button name="btnADM" class=" w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Login como Administrador</button>
</div>
~~~

- criar um desvio condicional no arquivo navegação para que quanto o botão btnADM for pressionado, o usuário seja redirecionado para a tela de login de administrador.

~~~php
if(isset($_POST["btnADM"])) {
  include_once '../View/ADMLogin.php';
}
~~~







---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)