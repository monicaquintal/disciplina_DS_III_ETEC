<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"/></a>  
<h2>Estudando PHP! 🐘</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda09" align="center">
<h2>Agenda 09: PHP - Orientado a Objeto.</h2>
</div>

## 1. Como começa a programar Orientado a Objetos?

Relembrando...
- classe: estrutura que define um tipo de
dados, contendo ou não atributos (variáveis) e funções (métodos) para acessar e manipular esses atributos.

### a) Criando a Classe:

- criar um arquivo PHP e salvar com o nome [Pessoa.php](./projects/projeto01/Pessoa.php). 
- para criar uma classe em PHP, utilizamos a `palavra reservada class`, seguida do nome da classe a ser criada.

~~~php
<?php
  class Pessoa {
    ...
  }
?>
~~~

- ***importante***: a primeira letra do nome da classe deve ser maiúscula (boa prática) do paradigma Orientado a Objeto.
- para a criação dos atributos, declará-los como uma variável:

~~~php
<?php
  class Pessoa {
    public $nome;
    public $sobrenome;
  }
?>
~~~

- a `palavra chave public` se refere à visibilidade, ou seja, quando instanciado o objeto, será possível o acesso a este atributo.
- após salvar as alterações, a classe com dois atributos está criada.

### b) Instanciando o objeto da classe:

- o PHP originalmente não é uma linguagem que foi desenvolvida para ser orientada a objetos.
- geralmente programadores PHP utilizavam a ***programação estruturada***: criam arquivos PHP e organizam as funções correlacionadas e mais utilizadas, como o CRUD de Banco de Dados e, dentro do arquivo, colocar todas as funções para inserir, atualizar, deletar e pesquisar dados; depois, fazer a inclusão do mesmo nas páginas que serão necessárias à sua utilização.
  - essa inclusão poderia ser feita utilizando include, require, include_once ou require_once, sendo:
    - Include (quando não encontra o arquivo, retorna um Warning).
    - Require (quando não encontra o arquivo, retorna um Fatal Error).
    - Include_once e Require_once (a diferença está apenas ao tentar incluir o arquivo, se o mesmo já foi incluído será retornado falso e não será incluído novamente).

- é uma boa prática para ser possível a utilização da classe, permitindo a instanciação de um objeto a partir dela, no index do site precisamos fazer a inclusão deste arquivo.
- instanciando um objeto da recém-criada classe “Pessoa”: criar um arquivo PHP e denominá-lo [index.php](./projects/projeto01/index.php), programando o código:

~~~php
<body>
  <?php
    include_once 'Pessoa.php';

    $p = new Pessoa();
    // declaramos uma variável $p;
    // com a palavra chave new junto ao construtor,
    // cria-se a classe e sua instância.

    // atribuindo valores aos atributos:
    $p->nome = "Monica";
    $p->sobrenome = "Quintal";

    // echo exibe na página os conteúdos dos atributos:
    echo $p->nome.' '. $p->sobrenome;

  ?>
</body>
~~~

- ***Observação***: 
  - o método construtor é utilizado para definir o comportamento, ou basicamente atribuir valores iniciais a um objeto. 
  - o método construtor é executado quando instanciamos um objeto por meio do operador “new” seguido do nome da classe a ter seu objeto instanciado.
  - não devemos retornar nenhum valor por meio do método construtor porque, por definição, o método retorna o próprio objeto que está sendo instanciado.
  - caso não seja definido um método construtor, todos os atributos do objeto receberão o `valor NULL`. Nesse caso, não criamos o método construtor, portanto ao instanciar, os atributos ficarão NULL.

## 2. Encapsulamento

- é um dos recursos importantes que o paradigma orientado a objetos nos traz e no PHP ela também é muito importante.
- basicamente é fornecido um meio de proteção de acesso aos atributos e métodos internos da classe/objeto. 
- para encapsular atributos e métodos, é necessário lembrar das visibilidades:
  - `public`: sem ocultação nenhuma, todos os atributos e/ou métodos declarados com essa visibilidade poderão ser acessados por todos que quiserem, geralmente é usado em operações onde queremos ou precisamos que sejam manipulados através do objeto instânciado.
  - `private`: seu uso faz com que qualquer método ou atributo seja visível apenas pela classe e somente ela terá acesso direto. Os atributos do tipo private somente poderão ser acessados por meio de métodos públicos.
  - `protected`: intermediária entre as duas anteriores. Porém, precisamos de herança para exemplificar. Para resumir: a visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.

~~~php
// em Pessoa.php
class Pessoa{
 private $nome;
 }

// em index.php
include_once 'Pessoa.php';

 $p = new Pessoa();
 $p->nome = "Monica";
 echo $p->nome;
~~~

- neste caso, ocorrerá um erro!!!
- para solucionar esse erro, é preciso criar os métodos getters e setters para acessar os atributos por meio de métodos públicos e para que a alteração do atributo seja realizada como desejamos.

~~~php
// em Pessoa.php:

class Pessoa{
  private $nome;

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getNome() {
    return $this->nome;
  } 
}

// em index.php:

include_once 'Pessoa.php';
  
$p = new Pessoa();
$p->setNome("Monica");
$p->sobrenome = "Quintal";
echo $p->getNome().' '. $p->sobrenome;
~~~

## 3. Herança

- representa uma das principais características da Orientação a Objetos.
- permite implementar dados de forma hierárquica, então, conseguimos implementar classes de uso geral, que possuam características comuns a várias entidades relacionadas. 
- essas classes poderão ser estendidas por outras (`palavra chave "extends"`), produzindo classes mais especializadas e que tenham implementações específicas.

- no arquivo [Pessoa.php](./projects/projeto01/Pessoa.php):

~~~php
class Pessoa{
  protected $nome;

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getNome() {
    return $this->nome;
  }
}
~~~

- criado o arquivo [Fisica.php](./projects/projeto01/Fisica.php).

~~~php
require_once 'Pessoa.php';
class Fisica extends Pessoa {
  private $cpf;

  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }
  public function getcpf() {
    return $this->cpf;
  }
}
~~~

- criado o arquivo [Juridica.php](./projects/projeto01/Juridica.php).

~~~php
require_once 'Pessoa.php';

class Juridica extends Pessoa {
  private $cnpj;

  public function setCnpj($cnpj) {
    $this->cnpj = $cnpj;
  }
  public function getCnpj() {
    return $this->cnpj;
  }
}
~~~

- testando em [index.php](./projects/projeto01/index.php):

~~~php
include_once 'Pessoa.php';
include_once 'Fisica.php';
include_once 'Juridica.php';

$p = new Pessoa();
$p->setNome("Monica");
echo 'Nome: '.$p->getNome();
echo '<br>';

$f = new Fisica();
$f->setCpf("111111111");
echo 'CPF: '.$f->getCpf();
echo '<br>';

$j = new Juridica();
$j->setCnpj("222222222");
echo 'CNPJ: '.$j->getCnpj();
~~~

- o resultado é simples, porém não mostra o funcionamento da herança propriamente dita, para isso vamos alterar o index e ver o resultado no navegador.
  - Primeiro passo: remover o objeto “p” do index.
  - Segundo Passo: atribuir nome nos objetos “f” e “j”.
  - Terceiro passo: exibir no navegador.

~~~php
include_once 'Fisica.php';
include_once 'Juridica.php';

$f = new Fisica();
$f->setNome("Zeca");
$f->setCpf("111111111");
echo 'Nome: '.$f->getNome().'<br>';
echo 'CPF: '.$f->getCpf();
echo '<br>';

$j = new Juridica();
$j->setNome("Industria Zeca");
$j->setCnpj("222222222");
echo 'Nome: '.$j->getNome().'<br>';
echo 'CNPJ: '.$j->getCnpj();
~~~

- ***observação***:
  - não foi mais necessário utilizar o include da classe pessoa, já que não instanciamos nenhum objeto de sua classe.
  - nesse código já percebemos o uso da herança, visto que as classes filhas (Física e jurídica) não possuem o método setNome e nem o atributo nome; porém, como a classe pai “Pessoa” possui este método (setNome) e atributo (nome), as classes filhas (Física e Jurídica) os recebem como herança, e podem fazer uso deles sem nenhum problema.

### Utilizando protected:

- em Fisica.php:

~~~php
require_once 'Pessoa.php';

class Fisica extends Pessoa {
  private $cpf;

  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }

  public function getcpf() {
    return $this->cpf;
  }

  public function mudarNome() {
    $this->nome = "Protegido";
  }
}
~~~

- o valor é atribuído em nome da mesma forma que na classe pai. Isso porque foi utilizado o modificador protected, relembrando que eles deixam o atributo com acesso total para as classes filhas. 
- agora, vamos mudar o index para conseguir realizar o teste e perceber a função “protected” em herança.

~~~php
$f = new Fisica();
$f->setNome("Monica");
$f->setCpf("111111111");
$f->mudarNome();
echo 'Nome: '.$f->getNome().'<br>';
echo 'CPF: '.$f->getCpf();
echo '<br>';
~~~

- com o resultado, percebemos que não foi alterado o nome para “protegido”, isso acontece, pelo fato do atributo agora ser privado e seu acesso deve ser realizado apenas pelos métodos públicos da classe Pessoa.
- obs.: Em PHP não é gerado erro pelas particularidades da sua concepção nos tipos de variáveis.


---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)
