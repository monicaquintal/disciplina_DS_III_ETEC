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
- o desenvolvimento desta interface será baseado no mesmo layout do login do usuário, com algumas pequenas mudanças:









---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)