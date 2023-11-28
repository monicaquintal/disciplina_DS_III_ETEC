<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://www.svgrepo.com/show/477093/mobile-phone-signal.svg" /></a> 
<h2>Estudando Kodular 🤳</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda01" align="center">
<h2>Agenda 03: Manipulação de Banco de Dados Local no Dispositivo.</h2>
</div>

## 1. Banco de Dados

- quando falamos que um programa armazena dados, na verdade o responsável por essa etapa é um software que trabalha nos bastidores, e abriga o BD previamente desenvolvido para oferecer de maneira organizada essa função.
- o Sistema Gerenciador de Banco de Dados (SGBD) é um software que é executado em um ambiente computacional, e nele encontramos e armazenamos o Banco de Dados.
- o SGBD tem a função de controlar o acesso ao Banco de Dados, e garantir o perfeito funcionamentos no processo manipulação dos dados e da estrutura do BD.

## 2. SQLite

- no sistema operacional Android há o SQLite: ele possui várias características de um gerenciador de banco, porém não podemos dizer que ele é um SGBD. 
- em seu [site oficial](https://www.sqlite.org/index.html), o SQLite é denominado como um mecanismo de BD implementado por classes que foram desenvolvidas na linguagem de programação C.

## 3. Structured Query Language (SQL)

- a diferença do SQLite para um SGBD tradicional é que ele não
requer instalação e complexas configurações: sua utilização se torna simples. A
- o SQLite é encontrado nos dispositivos com sistema operacional
Android, em alguns computadores e em outros dispositivos. F
- SQLite utiliza a Structured Query Language (SQL) ou Linguagem de Consulta Estruturada, basicamente dividida em dois grupos:
  - grupo de comandos de definição ou construção do BD e das Tabelas.
  - grupo responsável por manipular os dados nesse BD, seja essa manipulação uma inclusão de registros ou leitura, como também uma alteração de dados ou exclusão.

### a) Principais comandos da Data Definition Language (DDL) que serão utilizados nesse projeto “BancoSQL”:
- CREATE DATABASE: Responsável por criar o Banco de Dados.
- CREATE TABLE: Responsável por criar uma tabela dentro do BD para abrigar os dados de maneira organizada.

### b) Principais comandos da Data Manipulation Language (DML) utilizados nesse projeto “AppCofre”:
- INSERT: Responsável por inserir dados de maneira organizada em uma determinada tabela dentro do banco de dados.
- UPDATE: Responsável por alterar dados que já foram inseridos em uma determinada tabela.
- DELETE: Responsável por deletar dados que estão inseridos em uma determinada tabela.
- SELECT: Responsável por ler dados que estão inseridos em uma determinada tabela. 

## 4. Trabalhando com Kodular

- na plataforma Kodular vamos trabalhar com o componente SQLite/Sr.
- cria-se um aplicativo implementando os ***métodos*** que são responsáveis por criar a estrutura do banco quando essa ainda não existir, e os ***eventos*** atualizam a estrutura do banco quando isso for necessário. 
  - as implementações garantem que o banco de dados funcione sempre em um estado sensato e integro, de acordo com a necessidade do aplicativo.
  - essa classe facilita a implementação e a atualização do banco de dados até a primeira execução, a fim de evitar o bloqueio da inicialização do aplicativo.
- para facilitar o uso do SQLite no projeto, o “BancoSQL” foi desenvolvido utilizando alguns conceitos de programação em blocos.

---

## Você no comando

### 1. Criando a interface do projeto BancoSQL:
- desenvolver o “modelo” de BD que será utilizado pelo aplicativo.
- vídeo tutorial [aqui](https://www.youtube.com/watch?v=l50pnUcSL2g).

### 2. Criando a programação dos botões CRUD:
- o aplicativo será desenvolvido com base na ***variável acao***, que determina se o usuário está inserindo um novo registro ou editando um registro existente.
-  criar um ***procedimento listar*** para identificar a quantidade de registros armazenados no banco de dados. 
- através do evento when SQLite1.After Query a plataforma irá atualizar o Lst_Usuarios com os registros do banco de dados e apresentar a quantidade de registros no lbl_total.
- o ***procedimento visualizar*** tem a função recuperar o conteúdo do primeiro registro, para ser visualizado no aplicativo. 
  - o retorno será no formato de uma lista, por esse motivo utilizamos o bloco select list item list para especificar somente o segundo valor, ou seja, o conteúdo do campo. Sendo necessário a recuperação de cada campo por vez. 
  - a condição diferente de zero condiciona a visualização, onde se for zero registros não será exibido nada e depois a próxima verificação permite exibir somente o código menor que a quantidade de registros disponíveis. 
- ao inicializar o aplicativo, a programação irá criar a tabela; o componente SQLite já faz a criação do banco de dados automática. Depois verifica quantidade registros disponíveis e executa a visualização do primeiro registro do Banco de Dados. 
- vídeo tutorial [aqui](https://www.youtube.com/watch?v=xCeS3Y9khHw).

### 3. Criando a programação dos botões Excluir a Procurar:
- vídeo tutorial [aqui](https://www.youtube.com/watch?v=fC4QNxk_djU).

---

## Fichario:

"Envie para o seu tutor um vídeo mostrando a tela do celular com o projeto realizado por você na etapa “Você no comando”. É importante demonstrar as funcionalidades desenvolvidas até aqui.
<br>
Envie também o arquivo .aia. Aproveite para customizar o projeto “BancoSQL” com as suas cores e uma imagem escolhida por você." *

<div align="center">
  
https://github.com/monicaquintal/disciplina_DS_III_ETEC/assets/111545468/86ba7092-6fd8-4b77-a482-1c01f3d0e1d9

</div>

--- 

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)
