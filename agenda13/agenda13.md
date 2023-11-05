<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"/></a>  
<h2>Estudando PHP! 🐘</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda13" align="center">
<h2>Agenda 13: Projeto Completo - Camada Controller.</h2>
</div>

- camada Controller: gere e define quais dados ou regras devem ser acionadas e para onde serão encaminhados para, posteriormente, serem exibidos ou não pela camada View.

## 1. Navegação:

- criar o primeiro arquivo da camada Controller, denominado navegacao.php.
- será o responsável pelo direcionamento dos links para suas respectivas ações e eventos, então, será a classe principal para fluxo das informações.
- neste primeiro momento, na codificação desse
arquivo, será incluída apenas a página login (interface da camada View).

~~~php
switch ($_POST) {
  //Caso a variavel seja nula, mostrar tela de login
  case isset($_POST[null]):
  include_once "View/login.php";
  break;
}
~~~

## 2. Index:

- criar uma página index.php na raiz do servidor apache.

~~~html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontwesome/4.7.0/css/font-awesome.min.css">
<title>Cadastro de Curriculos</title>
</head>
<body>
<?php
include_once 'Controller/Navegacao.php';
?>
</body>
</html>
~~~

## 3. Primeiro acesso:

- como a interface Login foi acessada, primeiramente é preciso inserir o caminho para o arquivo Navegacao.php na action do arquivo login.php que está na camada View. 
- código do formulário:

~~~html
<form action="/Controller/Navegacao.php" method="post" class="w3-container w3-card-4 w3-
light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
~~~

- ao realizar esse procedimento, no momento em que o usuário clicar em qualquer botão, será redirecionado para o Controller de navegação que realizará o direcionamento.
- alterar o arquivo “Navegacao.php” para que quando o botão “Primeiro Acesso” for clicado, o usuário seja direcionado para a interface de primeiro acesso.
- codificar o arquivo Navegacao.php:

~~~php
switch ($_POST) {
  //Caso a variavel seja nula mostrar tela de login
  case isset($_POST[null]):
    include_once "View/login.php";
    break;

  //---Primeiro Acesso--//
  case isset($_POST["btnPrimeiroAcesso"]):
    include_once "../View/primeiroAcesso.php";
    break;
}
~~~

- ou seja, criamos um desvio condicional que, quando o usuário clicar no botão “btnPrimeiroAcesso”, o controller irá redirecionar nosso usuário para a interface “Primeiro Acesso”. Em caso negativo, o site será redirecionado para a interface login, ou seja, sempre que não for acionado nenhum botão ou link, a interface login irá ser exibida.

## 4. Cadastrar:

- no código do formulário que está na página primeiroacesso.php deve-se colocar o controller “/Controller/Navegacao.php” no atributo action.
- ao clicar em cadastrar, será necessário ter os dados fornecidos pelo usuário, inseri-los em um objeto usuário da classe modelo e persistir esses dados no Banco de Dados.
- o primeiro passo será realizar a alteração no código do arquivo Navegacao.php, inserindo outro desvio condicional, caso o botão Cadastrar (“btnCadastrar”) for pressionado. Esse código deve ser inserido após o código do primeiro acesso e antes de fechar as chaves. V

~~~php
//---Cadastrar--//
case isset($_POST["btnCadastrar"]):
  require_once "../Controller/UsuarioController.php";
  $uController = new UsuarioController();
  if ($uController->inserir(
  $_POST["txtNome"],
  $_POST["txtCPF"],
  $_POST["txtEmail"],
  $_POST["txtSenha"]
  ))
  {
    include_once "../View/cadastroRealizado.php";
  } else {
    include_once "../View/cadastroNaoRealizado.php";
  }
  break;
~~~

- neste código instanciamos um objeto UsuarioController e realizamos a chamada do método inserir dentro de um desvio condicional, passando as informações diretamente dos inputs preenchidos pelo usuário para o objeto usuário e tentando realizar a persistência dos dados.
  - se o retorno for positivo, é incluída a página “cadastro realizado”. Se o retorno for negativo, a página “cadastro não realizado” será incluída.
- alterar as actions de ambas as páginas da camada View (cadastroRealizado.php e cadastroNaoRealizado.php), atribuindo-lhes o mesmo caminho das demais: “/Controller/Navegacao.php”.

## 5. Classe UsuarioController:

- precisamos buscar os dados da View e popular um objeto em Model, neste momento a função desta camada fica evidente.
- criar uma classe na camada Controller, para que seja possível controlar esse fluxo de informação da camada View para a camada Model, e por fim persistir esses dados.
- criar um arquivo denominado “UsuarioController.php”, classe que terá todos os métodos necessários para controlar os dados pessoais do usuário tais como: nome, CPF etc.

~~~php
  if(!isset($_SESSION)) {
    session_start();
  }
  class UsuarioController {
    public function inserir($nome, $cpf, $email,$senha) {
      require_once '../Model/Usuario.php';
      $usuario = new Usuario();
      $usuario->setNome($nome);
      $usuario->setCPF($cpf);
      $usuario->setEmail($email);
      $usuario->setSenha($senha);
      $r = $usuario->inserirBD();
      $_SESSION['Usuario'] = serialize($usuario);   
      return $r;
    }
  }
~~~

- voltando ao arquivo Navegacao.php, após os delimitadores do php, verificar se há uma sessão aberta para criá-la ou não, de acordo com a resposta do desvio condicional.

~~~php
if(!isset($_SESSION)) {
session_start()
}
~~~

## 6. Dados Pessoais – Exibir dados

- voltando a página principal.php, precisamos fazer com que os dados cadastrados pelo usuário estejam disponíves para visualização na interface da etapa dados pessoais, para isso necessitamos realizar algumas atualizações no arquivo principal.php.

### a) No início da tag Body, incluir a classe Usuário e verificar se a sessão está aberta ou não:

~~~php
include_once '../Model/Usuario.php';
if(!isset($_SESSION)) {
  session_start();
}
~~~

### b) Para cada atributo value dos inputs utilizaremos o objeto serializado na seção para realizar a inserção dos dados:

~~~php
// ID:
value= "<?php echo unserialize($_SESSION['Usuario'])->getID();?>"
// Nome:
value="<?php echo unserialize($_SESSION['Usuario'])->getNome();?>"
// Data de nascimento:
value="<?php echo unserialize($_SESSION['Usuario'])->getDataNascimento();?>"
// CPF:
value="<?php echo unserialize($_SESSION['Usuario'])->getCPF();?>"
// Email:
value="<?php echo unserialize($_SESSION['Usuario'])->getEmail();?>"
~~~

### c) Neste formulário, é necessário mudar a action para: “/Controller/Navegacao.php”.

## 7. Dados Pessoais – Atualizar dados:

- abrir o arquivo UsuarioControler.php para programar um novo método na classe “usuário controller”, denominado “atualizar”, desenvolvendo
o seguinte código:

~~~php
public function atualizar($id, $nome, $cpf, $email, $dataNascimento) {
  require_once '../Model/Usuario.php';

  $usuario = new Usuario();
  $usuario->setId($id);
  $usuario->setNome($nome);
  $usuario->setCPF($cpf);
  $usuario->setEmail($email);
  $usuario->setDataNascimento($dataNascimento);
  $r = $usuario->atualizarBD();
  $_SESSION['Usuario'] = serialize($usuario);
  return $r;
}
~~~

- adicionar no arquivo Navegacao.php os códigos a seguir:

~~~php
//--Atualizar--//
case isset($_POST["btnAtualizar"]):
  require_once "../Controller/UsuarioController.php";
    $uController = new UsuarioController();
    if ($uController->atualizar(
    $_POST["txtID"],
    $_POST["txtNome"],
    $_POST["txtCPF"],
    $_POST["txtEmail"],
    date("Y-m-d", strtotime($_POST["txtData"]))
    )
  ) {
    include_once "../View/atualizacaoRealizada.php";
  } else {
    include_once "../View/operacaoNaoRealizada.php";
  }
  break;
~~~

- a função date converte do sistema dia/mês/ano para ano/mês/dia.
- para as interfaces atualização Realizada e Operação não realizada, configure a action do form para: "/Controller/Navegacao.php".

## 8. Login

- quando o usuário visitar o projeto pela segunda vez, ele não terá mais a necessidade de criar outro cadastro, então, ele deve realizar o login com seu CPF e senha cadastrados anteriormente.
- para conseguir realizar esse procedimento, devemos programar a classe usuário controller com uma função denominada login.
- abra o arquivo UsuarioController.php e adicione os códigos:

~~~php
public function login($cpf, $senha) {
  require_once '../Model/Usuario.php';
  $usuario = new Usuario();
  $usuario->carregarUsuario($cpf);
  $verSenha=$usuario->getSenha();
  if($senha==$verSenha) {
    $_SESSION['Usuario'] = serialize($usuario);
    return true;
  } else {
    return false;
  }
}
~~~

- codificar o botão btnLogin para verificar se o usuário está fazendo o primeiro acesso: abrir o arquivo navegaçao.php e adicionar os códigos no comando switch:

~~~php
case isset($_POST["btnLogin"]):
  require_once "../Controller/UsuarioController.php";
  $uController = new UsuarioController();
  if ($uController->login($_POST["txtLogin"], $_POST["txtSenha"])) {
    include_once "../View/principal.php";
  } else {
    include_once "../View/cadastroNaoRealizado.php";
  }
  break;
~~~

## 9. Formação acadêmica

- na interface formação acadêmica, localizada na página principal.php, programaremos primeiro a ação para inserir os dados no Banco, a partir do preenchimento dos dados pelo usuário.
- primeiro desenvolver a classe FormacaoAcadController, que terá a função de controlar o fluxo dos dados referentes à formação acadêmica. 
- dentro da pasta da camada Controller, crie um arquivo PHP denominado fomacaoAcadController.php.

~~~php
if(!isset($_SESSION)) {
  session_start();
}

class FormacaoAcadController{}
~~~

- usando como base o desenvolvimento da classe UsuarioController e pensando em algumas especificidades dessa classe, precisaremos de três métodos:

### I. Inserir:
- tem a função de instanciar um objeto da classe Formação Acadêmica, denominado “FormacaoAcad” e inserir os dados em sua respectiva tabela.

~~~php
public function inserir($inicio, $fim, $descricao,$idusuario) {
require_once '../Model/FormacaoAcad.php';
  $formacao = new FormacaoAcad();
  $formacao->setInicio($inicio);
  $formacao->setFim($fim);
  $formacao->setDescricao($descricao);
  $formacao->setIdUsuario($idusuario);
  $r = $formacao->inserirBD();
  return $r;
}
~~~

### II. Remover:
- realiza um delete de dados na tabela formação acadêmica por meio de um parâmetro.

~~~php
public function remover($id) {
  require_once '../Model/FormacaoAcad.php';
  $formacao = new FormacaoAcad();
  $r = $formacao->excluirBD($id);
  return $r;
}
~~~

### III. Gerar Lista:
- quando desenvolvemos a interface da formação acadêmica, definimos uma tabela que contém colunas para: datainicio, datafim, descrição e apagar. Com esse método e uma instância de FormacaoAcad, teremos disponível a lista de formação acadêmica do usuário logado no sistema de currículo. 

~~~php
public function gerarLista($idusuario) {
  require_once '../Model/FormacaoAcad.php';
  $formacao = new FormacaoAcad();
  return $results = $formacao->listaFormacoes($idusuario);
}
~~~

- o próximo passo é adicionar o caminho para a execução “/Controller/navegacao.php” na action do formulário da formação acadêmica. 
- codificar o evento do clique do usuário no botão: btnAddFormacao. 
- abrir o arquivo Navegacao.php e inserir:

~~~php
//--- Adicionar Formacao ---//
case isset($_POST["btnAddFormacao"]):
  require_once "../Controller/FormacaoAcadController.php";
  include_once "../Model/Usuario.php";
  $fController = new FormacaoAcadController();
  if ($fController->inserir(
    date("Y-m-d", strtotime($_POST["txtInicioFA"])),
    date("Y-m-d", strtotime($_POST["txtFimFA"])),
    $_POST["txtDescFA"],
    unserialize($_SESSION["Usuario"])->getID()
    ) != false
  ) {
    include_once "../View/cadastroRealizado.php";
  } else {
    include_once "../View/cadastroNaoRealizado.php";
  }
  break;
~~~

- modificar o action do formulário do arquivo “informacaoInserida.php” para o caminho de sempre (./Controller/Navegacao.php”).
- para a visualização dos dados da formação pelo usuário, é preciso codificar o arquivo principal.php seguindo 3 passos:

### a) Incluir a classe FormacaoAcadController:

~~~php
include_once '../Controller/FormacaoAcadController.php';
~~~

- esse código deve ser inserido depois da tag &lt;body&gt;, antes de verificar a sessão. 

~~~php
...
<body class="w3-light-grey">

<?php
include_once '../Controller/FormacaoAcadController.php';
if(!isset($_SESSION)) {
  session_start();
}
?>
<nav class="w3-sidebar w3-bar-block w3-center w3-blue ">
...
~~~

### b)  Instanciar, dentro da tabela html, um objeto da FormacaoAcadController, que invocará o método gerarLista, e passará como parâmetro o ID do usuário que está armazenado na sessão, que resulta em um objeto contendo um conjunto de formações, caso o retorno tenha sido diferente de nulo.

### c)  Criar uma estrutura de repetição, gerando uma tabela para cada registro encontrado.

~~~php
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
<?php
$fCon = new FormacaoAcadController();
$results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
if($results != null)
while($row = $results->fetch_object()) {
echo '<tr>';
echo '<td style="width: 10%;">'.$row->inicio.'</td>';
echo '<td style="width: 10%;">'.$row->fim.'</td>';
echo '<td style="width: 65%;">'.$row->descricao.'</td>';
echo '<td style="width: 5%;">
<form action="/Controller/Navegacao.php" method="post">
<input type="hidden" name="id" value="'.$row->idformacaoAcademica.'">
<button name="btnExcluirFA" class="w3-button w3-block w3-blue
w3-cell w3-round-large">
<i class="fa fa-user-times"></i> </button></td>
</form>';
echo '</tr>';
}
?>
</table>
</div>
~~~

- para finalizar, é preciso desenvolver o botão “btnExcluirFA” para excluir o registro do banco. 
- inserir no arquivo Navegacao.php o seguinte desvio condicional:

~~~php
//--- Excluir Formacao ---//
case isset($_POST["btnExcluirFA"]):
  require_once "../Controller/FormacaoAcadController.php";
  include_once "../Model/Usuario.php";
  $fController = new FormacaoAcadController();
  if ($fController->remover($_POST["id"]) == true) {
    include_once "../View/informacaoExcluida.php";
  } else {
    include_once "../View/operacaoNaoRealizda.php";
  }
  break;
~~~

---

## Você no Comando

1. Crie toda a camada Controller para a Interface Experiência Profissional, incluindo a criação da Classe Experiencia Profissional Controller com seus métodos (Inserir, Remover e gerar Lista);
2. Altere o Arquivo principal.php na interface experiência profissional;
3. Codifique o arquivo Navegacao.php para que aconteça todo o fluxo entre as camadas (Model, View e Controller).
<br>
Obs: não se esqueça de programar as tabelas html na interface.
Dicas:

- Utilize a classe Formação acadêmica Controller como base para o desenvolvimento;
- Não se esqueça de programar a action dos formulários.
- Não se esqueça de codificar as ações para os eventos de clique do usuário.
- Não se esqueça de incluir a classe que você desenvolver na interface principal.

---

### Resolução:

### a) Arquivo ExperienciaProfissionalController.php:

~~~php
if(!isset($_SESSION)) {
  session_start();
}

class ExperienciaProfissionalController {

  // Inserir
  public function inserir($inicio, $fim, $empresa, $descricao,$idusuario) {
    require_once '../Model/ExperienciaProfissional.php';
    $expP = new ExperienciaProfissional();
    $expP->setInicio($inicio);
    $expP->setFim($fim);
    $expP->setEmpresa($empresa);
    $expP->setDescricao($descricao);
    $expP->setIdUsuario($idusuario);
    $r = $expP->inserirBD();
    return $r;
  }

  // Remover
  public function remover($id) {
    require_once '../Model/ExperienciaProfissional.php';
    $expP = new ExperienciaProfissional();
    $r = $expP->excluirBD($id);
    return $r;
  }

  // Gerar lista
  public function gerarLista($idusuario) {
    require_once '../Model/ExperienciaProfissional.php';
    $expP = new ExperienciaProfissional();
    return $results = $expP->listaExperiencias($idusuario);
  }
}
~~~

### b) Arquivo Navegacao.php, método para inserir experiencia profissional:

~~~php
//--- Adicionar Experiencia Profissional ---//
case isset($_POST["btnAddEP"]):
  require_once "../Controller/ExperienciaProfissionalController.php";
  include_once "../Model/Usuario.php";
  $epController = new ExperienciaProfissionalController();
  if ($epController->inserir(
    date("Y-m-d", strtotime($_POST["txtInicioEP"])),
    date("Y-m-d", strtotime($_POST["txtFimEP"])),
    $_POST["txtEmpEP"],
    $_POST["txtDescEP"],
    unserialize($_SESSION["Usuario"])->getID()
    ) != false
  ) {
    include_once "../View/informacaoInserida.php";
  } else {
    include_once "../View/operacaoNRealizada.php";
  }
  break;
~~~

### c) Arquivo Navegacao.php, método para excluir experiencia profissional:

~~~php
//--- Excluir Experiencia Profissional ---//
case isset($_POST["btnExcluirEP"]):
  require_once "../Controller/ExperienciaProfissionalController.php";
  include_once "../Model/Usuario.php";
  $epController = new ExperienciaProfissionalController();
  if ($epController->remover($_POST["idEP"]) == true) {
    include_once "../View/informacaoExcluida.php";
  } else {
    include_once "../View/operacaoNRealizada.php";
  }
  break;
~~~

### d) Arquivo principal.php, tabela html para listar os dados:

~~~php
<div class="w3-container">
  <table class="w3-table-all w3-centered">
    <thead>
      <tr class="w3-center w3-blue">
        <th>Início</th>
        <th>Fim</th>
        <th>Empresa</th>
        <th>Descrição</th>
        <th>Apagar</th>
      </tr>
    <thead>
    <?php
      $ePro = new ExperienciaProfissionalController();
      $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
      if($results != null)
        while($row = $results->fetch_object()) {
          echo '<tr>';
          echo '<td style="width: 10%;">'.$row->inicio.'</td>';
          echo '<td style="width: 10%;">'.$row->fim.'</td>';
          echo '<td style="width: 10%;">'.$row->empresa.'</td>';
          echo '<td style="width: 65%;">'.$row->descricao.'</td>';
          echo '<td style="width: 5%;">
          <form action="/Controller/Navegacao.php" method="post">
          <input type="hidden" name="idEP" value="'.$row-
          >idexperienciaprofissional.'">
          <button name="btnExcluirEP" class="w3-button w3-block w3-blue
          w3-cell w3-round-large">
          <i class="fa fa-user-times"></i> </button></td>
          </form>';
          echo '</tr>';
        }
    ?>
  </table>
</div>
~~~

--- 

## Fichário 

Bia deve voltar de férias na próxima segunda, porém o projeto ainda não está finalizado e a equipe Gamma ainda precisa terminar a última etapa do projeto antes do retorno da líder. Para isso é preciso correr contra o relógio!
<br/>
Nessa corrida contra o tempo, você foi escolhido para auxiliar a equipe Gama a desenvolver a camada controller da etapa outras formações. Então, mãos à obra!
<br/>

1. Crie toda a camada controle para a interface OutrasFormações que deve incluir a criação da Classe OutrasFormações com seus métodos (Inserir, Remover e gerarLista);
2. Alterar o arquivo principal na interface outras Formações.
3. Codificar o arquivo navegação para que aconteça todo o fluxo entre as camadas (Model, View e Controller).

<br/>
Importante: não se esqueça de programar na interface das tabelas!
<br/>
Dicas:

- Utilize a classe FormaçãoacadêmicaController ou Experiência Profissional como base para o desenvolvimento.
- Não esqueça da action dos formulários.
- Não esqueça de codificar as ações para os eventos de clique do usuário.
- Não esqueça de incluir a classe que você desenvolveu na interface principal.

---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)