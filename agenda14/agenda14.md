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
public function setNome($nome)
{
$this->nome = $nome;
}
public function getNome()
{
return $this->nome;
}
//cpf
public function setCPF($cpf)
{
$this->cpf = $cpf;
}
public function getCPF()
{
return $this->cpf;
}
// Senha
public function setSenha($senha)
{
$this->senha = $senha;
}
public function getSenha()
{
return $this->senha;
}
~~~







---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)