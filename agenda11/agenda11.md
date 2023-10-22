<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"/></a>  
<h2>Estudando PHP! 🐘</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda11" align="center">
<h2>Agenda 11: Projeto Completo - Camada Model.</h2>
</div>

- com os conhecimentos adquiridos sobre Padrão MVC e PHP Orientado a Objetos, iniciaremos a construção do projeto completo.
- nessa agenda, serão aplicados conhecimentos da camada Model do Padrão MVC em um projeto com PHP
Orientado a Objetos, modelando as classes e manipulando os dados.

## 1. Banco de dados

<div align="center">
<img src="./assets/diagrama-logico-bd.png" width="50%">
<p><em>Diagrama Lógico do Banco de Dados.</em></p><br>
</div>

~~~sql
CREATE SCHEMA IF NOT EXISTS `projeto_final` DEFAULT CHARACTER SET latin1;
USE `projeto_final`;
-- TABLE `projeto_final`.`usuario`
CREATE TABLE IF NOT EXISTS `projeto_final`.`usuario` (
	`idusuario` INT(11) NOT NULL auto_increment,
    `nome` VARCHAR(150) NULL DEFAULT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `dataNascimento` DATE NULL DEFAULT NULL,
    `email` VARCHAR(150) NULL DEFAULT NULL,
    `senha` VARCHAR(45) NULL DEFAULT NULL,
    PRIMARY KEY (`idusuario`),
    UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC))
-- TABLE `projeto_final`.`formacaoAcademica`
CREATE TABLE IF NOT EXISTS `projeto_final`.`formacaoAcademica` (
	`idformacaoAcademica` INT(11) NOT NULL AUTO_INCREMENT,
    `idusuario` INT(11) NOT NULL,
    `inicio` DATE NOT NULL,
    `fim` DATE NULL DEFAULT NULL,
    `descricao` VARCHAR(150) NULL DEFAULT NULL,
    PRIMARY KEY (`idformacaoAcademica`),
    INDEX `idusuario_idx` (`idusuario` ASC),
    CONSTRAINT `idusuario`
		FOREIGN KEY (`idusuario`)
        REFERENCES `projeto_final`.`usuario` (`idusuario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION    
    );
~~~

## 2. Camada Model

### a) Classe ConexaoBD:

- classe que será responsável por realizar a  conexão com o banco de dados. 
- dentro das chaves, inserir os 4 atributos privados:
  - serverName: nome ou ip do servidor.
  - userName: nome do usuário de conexão ao BD.
  - password: senha para conexão ao BD.
  - dbName: nome da base de dados desse projeto.

~~~php
class ConexaoBD {
  private $serverName = "localhost";
  private $userName = "root";
  private $password = "usbw";
  private $dbName = "projeto_final";

  public function conectar() {
    $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
    return $conn;
  }
}
~~~

## 3. Camada Usuário

- responsável por gerenciar os dados do usuário no projeto. 
- criar a classe e seus atributos:
  - idusuario: código único de cada registro de usuário.
  - nome: nome do usuário.
  - cpf: CPF do usuário.
  - dataNascimento: data de nascimento do usuário.
  - email: e-mail do usuário.
  - senha: senha para acesso ao site.
- criar métodos getters e setters.

~~~php
class Usuario {
  private $id;
  private $nome;
  private $cpf;
  private $email;
  private $dataNascimento;
  private $senha;

  // id
  public function setID ($id) {
    $this->id = $id;
  }

  public function getID() {
    return $this->id;
  }

  // nome
  public function setNome ($nome) {
    $this->nome = $nome;
  }

  public function getNome() {
    return $this->nome;
  }

  // cpf
  public function setCPF ($cpf) {
    $this->cpf = $cpf;
  }

  public function getCPF() {
    return $this->cpf;
  }

  // e-mail
  public function setEmail ($email) {
    $this->email = $email;
  }

  public function getEmail() {
    return $this->email;
  }

  // data de nascimento
  public function setDataNascimento ($dataNascimento) {
    $this->dataNascimento = $dataNascimento;
  }

  public function getDataNascimento() {
    return $this->dataNascimento;
  }

  // cpf
  public function setSenha ($senha) {
    $this->senha = $senha;
  }

  public function getSenha() {
    return $this->senha;
  }
}
~~~

## 4. Método inserirBD():

- dentro da classe Usuário.
- função: inserir no Banco de Dados as informações do usuário quando for invocado.
- neste primeiro momento, não vamos inserir todas as informações. 
- ao realizar o cadastro, o usuário precisará apenas fornecer: Nome, CPF, e-mail e senha. 

~~~php
  public function inserirBD() {
    require_once 'Conexao.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO usuario (nome, cpf, email, senha)
    VALUES('".$this->nome."', '".$this->cpf."','". $this->email."', '".$this->senha."')";

    if ($conn->query($sql) === TRUE) {
      $this->id = mysqli_insert_id($conn);
      $conn->close();
      return TRUE;
    } else {
      $conn->close();
      return FALSE;
    }
  }
~~~

- o método foi definido como público para ser possível sua utilização após a instância de um objeto da classe Usuário.
- depois, é necessária a inclusão da classe conexãoBD.
- na sequência, após os delimitadores, devemos criar a classe e seus atributos:
  - idusuário: código único de cada registro de usuário.
  - nome: nome do usuário.
  - cpf: CPF do usuário.
  - dataNascimento: data de nascimento do usuário.
  - email: e-mail do usuário.
  - senha: senha para acesso ao site.
- em "if ($conn->query($sql) === TRUE)":
  - em caso positivo (true), obtemos o id gerado no banco de dados para que seja inserido no objeto, fechamos a conexão e retornamos TRUE.
  - em caso negativo, fechamos a conexão e retornamos FALSE.

## 5. Método carregarUsuario():

~~~php
  public function carregarUsuario($cpf) {

    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usuario WHERE cpf = ".$cpf;
    $re = $conn->query($sql);
    $r = $re->fetch_object();
    
    if($r != null) {
      $this->id = $r->idusuario;
      $this->nome = $r->nome;
      $this->email = $r->email;
      $this->cpf = $r->cpf;
      $this->dataNascimento = $r->dataNascimento;
      $this->senha = $r->senha;
      $conn->close();
      return true;
    } else {
      $conn->close();
      return false;
    } 
  }
~~~

- esse método segue o mesmo padrão:
  - inclusão da Classe ConexaoBD.
  - instância do Objeto da Classe ConexãoBD,
  - conexão ao Banco de Dados, com verificação do sucesso ou não.
  - confecção da sentença SQL.
  - execução da sentença, com verificação do sucesso ou não.
- a diferença é que em caso positivo, deve-se popular os dados dos objetos com o resultado da consulta ao Banco de Dados, fechando, em seguida, a conexão e por fim retornando TRUE.

## 6. Método atualizarBD():

~~~php
  public function atualizarBD() {

    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE usuario SET nome = '".$this->nome."', cpf = '". $this->cpf."', dataNascimento = '". $this->dataNascimento."',
    email='".$this->email."' WHERE idusuario='". $this->id. "'";

    if ($conn->query($sql) === TRUE) {
      $conn->close();
      return true;
    } else {
      $conn->close();
      return false;
    }
  }
~~~

- esse método segue o mesmo padrão:
  - inclusão da Classe ConexaoBD.
  - instância do objeto da Classe ConexãoBD,
  - conexão ao Banco de Dados, com verificação do sucesso ou não.
  - confecção da sentença SQL.
  - execução da sentença, com verificação do sucesso ou não.
- fim da classe Usuario!

## 7. Classe FormacaoAcad:

- responsável por gerenciar os dados da formação acadêmica do usuário. 
- criar o arquivo PHP com o nome “FormacaoAcad”.
- após a criação da classe, inserir seus atributos:
  - id é o código único de cada registro de formação acadêmica.
  - idusuario é o código do usário a quem pertence essa formação.
  - início é a data do início da formação.
  - fim é a data do fim da formação.
  - descrição é a descrição da formação acadêmica.

~~~php
class FormacaoAcad {
  private $id;
  private $idusuario;
  private $inicio;
  private $fim;
  private $descricao;

  // Getters e Setters

  // id
  public function setID ($id) {
    $this->id = $id;
  }

  public function getID() {
    return $this->id;
  }

  // idusuario
  public function setIdUsuario ($idusuario) {
    $this->idusuario = $idusuario;
  }

  public function getIdUsuario() {
    return $this->idusuario;
  }

  // inicio
  public function setInicio ($inicio) {
    $this->inicio = $inicio;
  }

  public function getInicio() {
    return $this->inicio;
  }

  // fim
  public function setFim ($fim) {
    $this->fim = $fim;
  }

  public function getFim() {
    return $this->fim;
  }

  // descrição
  public function setDescricao ($descricao) {
    $this->descricao = $descricao;
  }

  public function getDescricao() {
    return $this->descricao;
  }
}
~~~

## 8. Métodos da Classe FormacaoAcad:

- agora será feita a codificação de 3 métodos específicos: inserirBD, excluirBD e listaFormacoes. 

### a) formacaoAcademica():

- o primeiro método (“inserirBD”) é exatamente
como o desenvolvido para a classe Usuário, apenas mudando para a tabela (INSERT INTO).

~~~php
public function inserirBD() {
  require_once 'Conexao.php';

  $con = new ConexaoBD();
  $conn = $con->conectar();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO formacaoAcademica (idUsuario, inicio, fim, descricao)
  VALUES('".$this->idusuario."', '".$this->inicio."','". $this->fim."', '".$this->descricao."')";

  if ($conn->query($sql) === TRUE) {
    $this->id = mysqli_insert_id($conn);
    $conn->close();
    return TRUE;
  } else {
    $conn->close();
    return FALSE;
  }
}
~~~

### b) excluirBD():

~~~php
public function excluirBD($id) {

  require_once 'ConexaoBD';

  $con = new ConexaoBD();
  $conn = $con->conectar();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM formacaoAcademica WHERE idformacaoAcademica = '".$id ."';";

  if ($conn->query($sql) === TRUE) {
    $this->id = mysqli_insert_id($conn);
    $conn->close();
    return TRUE;
  } else {
    $conn->close();
    return FALSE;
  }
}
~~~















---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)