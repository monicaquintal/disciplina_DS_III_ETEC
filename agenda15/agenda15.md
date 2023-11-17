<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"/></a>  
<h2>Estudando PHP! 🐘</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div align="center">
<h2>Agenda 15: Criptografia em dados PHP</h2>
</div>

<div align="center">
<h2>1. Introdução</h2>
</div>

## 1. O que é Criptografia em Sistemas Computacionais?

- é um estudo que aplica formas para uma comunicação e armazenamento seguro e privado de dados.
- a palavra vem do grego “Kryptós”, “oculto” e “Graphein”, “escrita”. 
- oferece a transformação de dados em formatos que todos tenham acessão ao seu conteúdo ou semântica, para um formato não entendível por pessoas/sistemas que não foram autorizados, usando um algotimo de criptografia.

### a) `Algoritmo de criptografia`:

- método matemático criado para encriptar e/ou desencriptar dados com o uso das chaves de criptografia, chave dados ou conjundo de dados utilizados para encriptar um texto, ou desencriptar um texto já encriptado.

### b) `Confidencialidade`:

- significa que a informação não está disponível para pessoas e processos que não tenham autorização de acesso ou utilização de sua semântica.
- somente pessoas/processos autorizados terão acesso à informação armazenada.

<div align="center">
<h2>2. Vamos programar em PHP!</h2>
</div>

- o PHP pode ajudar com várias extensões que oferecem algoritmos de “mão única” ou one-way: ao codificar o texto, esses algoritmos não permitem que textos já codificados retornem aos textos originais.
- outra alternativa é mão dupla, o que possibilita a codificar e decodificar o texto. 

## a) `MD5`:

- é provalvelmente o algoritmo mais utilizado em php, principalmente em tutoriais e vídeo aulas.
- trata-se de um [algoritmo de hash](forum.iMasters.com.br) de 128 bits. 
- de forma clara e objetiva, o md5 gera uma string alfa-numérica de 32 caracteres.
    - não importa se você tá gerando o MD5 de um texto com cinco ou seis letras ou de um texto de que contenha mais de mil palavras, o MD5 ***sempre*** entregará uma string de 32 caracteres!!! 
    - ou seja, quando for armazenar essas informações no Banco de Dados, colocar espaço suficiente para 32 caracteres!

### ***Praticando***:

- criar um arquivo PHP e salvar com o nome de “mdr” com a extensão php. 
- incluir os delimetadores do PHP para depois iniciar a programação.

~~~php
$texto = 'técnico em desenvolvimento de sistemas';
$codificado = md5($texto);
echo "Resultado do texto codificação usando md5: " . $codificado;
~~~

- driadas duas variáveis: "texto", na qual atribuímos um texto qualquer, e outra chamada "codificado", em que será atribuído o resultado da codificação MD5 no texto armazenado na variável "texto". 
- o resultado, neste caso, será: "d187e7685130ea461e79e342e2a81558".

## b) `SHA1`:

- trata-se de outra hash de mão única. 
- segue basicamente o proposto pelo MD5, porém possui 160 bits, resultando em uma string maior formada por 40 caracteres alfa-numéricos.

### ***Implementando:***

- criar um arquivo PHP e salvar com o nome de “sha1” com a extensão php. 
- criar os delimetadores do php!

~~~php
$texto = 'técnico em desenvolvimento de sistemas';
$codificado = sha1($texto);
echo "Resultado do texto codificação usando sha1: " . $codificado;
~~~ 

- pelo fato do algoritmo Hash ter uma chavede 160 bits e retornar uma string maior (40 caracteres), a chance de encontrar duas strings codificadas iguais é bem mais rara que numa chave de 128 bits.
- o resultado no navegador será: 7f742b290f8a57d402531ba74544ee1a3af26c2b.

## c) `BASE64`:

- Trata-se de um método para codificação dos dados, com a principal característica de ser uma codificação de mão dupla.
- é dividida em duas funções: a primeira para codificar a string base64_encode e a outra para decodificar a string voltando ao seu estado original: base64_decode.

### ***Vamos implementar?***

- criar um arquivo PHP e salvar com o nome de “base64” com a extensão php. 
- criar os delimetadores do PHP antes de programar. 
- essa forma de criptografia é muito utilizada para codificar url de sites.

~~~php
$texto = 'Técnico em Desenvolvimento de Sistemas';
$criptografada = base64_encode($texto);
echo "Resultado da criptografia usando base64: " . $criptografada."<br>";
$textoOriginal = base64_decode($criptografada);
echo "Resultado da decodificação usando base64: " . $textoOriginal;
~~~

## d) `HASH()`:`

- trata-se de uma função que possibilita a escolha do algoritomo hash de mão única.
- precisa de dois parâmetros:
    - algoritmo a ser usado para codificação.
    - string para codificação.
- há um terceiro parâmetro que pode ser utilizado, mas sem obrigatoriedade, trata-se de um valor
booleano.
    - caso o valor seja verdadeiro, a string retornada é codificada em binário, ou seja, é retornada com uma cadeia de números composta apenas por 0 e 1.
    - quando valor falso, a string retornada é em caracteres alfa numéricos. O valor falso é o padrão, caso for utilizá-lo não é necessário passa-lo como parâmetro.

### ***Vamos implementar?***

- criar um arquivo PHP e salvar com o nome de "hash" com a extensão php. 
- criar os delimetadores do PHP antes de programar.
- sintaxe:

~~~
hash(parâmetro 1, parâmetro 2); 
// sendo parâmetro 1: nome do algoritmo a ser utilizado, e parâmetro: texto a ser criptrografado.
~~~

- exemplo:

~~~php
$texto = 'Técnico em Desenvolvimento de Sistemas';
$criptografada = hash('ripemd160', $texto);
echo "Resultado da criptografia usando função Hash com o algoritmo ripem160: " .
$criptografada."<br>";
$texto = 'Técnico em Desenvolvimento de Sistemas';
$criptografada = hash('sha256', $texto);
echo "Resultado da criptografia usando função Hash com o algoritmo sha256: " .
$criptografada."<br>";
~~~

- neste exemplo foram utilizados dois algoritmos: ripemd160 e sha256 – uma versão do algoritmo sha1, mas com uma palavra de 256 bits!

### Importante:

- para se ter uma noção de quantos algoritmos é possível utilizar e qual o tamanho de cada um, vamos fazer um código e como resultado teremos a codificação com cada uma das opções de altoritmos disponíveis na [função hash](http://php.net/manual/). 
- código:

~~~php
$texto = "Técnico em Desenvolvimento de Sistemas";

foreach (hash_algos() as $v) {
    $codificado = hash($v, $texto, false);
    echo "Algoritmo: ".$v."<br>";
    echo "Tamanho: ".strlen($codificado)."<br>";
    echo "Texto Codificado: ".$codificado."<br>";
    echo "<br>";
}
~~~

## e) `PasswordHashing()`:

- trata-se de uma API que fornece um conjunto de funções que facilitam muito a utilização de hash focado em senhas, ajudando o desenvolvedor a criar hashes seguros. - essas funções fazem o trabalho pesado, de forma segura e com alto grau de confiabilidade. 
- precisamos trabalhar com duas funções: password_hash (criará a hash) e password_verify (fará a verificação da hash).

### ***Vamos implementar?***

- criar um arquivo PHP e salvar com o nome de 'passwordHash' com a extensão php.
- criar os delimetadores do PHP antes de programar. 
- sintaxe:

~~~
password_hash (“texto”, PASSWORD_DEFAULT);
// - primeiro parâmetro: texto a ser codificado e
// - segundo parâmetro: as configurações de custo e salt.
~~~

- o ***salt*** é utilizado para evitar que duas senhas idênticas produzam hashes idênticos, o que facilita a descoberta de senhas.
- o ***custo*** é o valor que determina o quão complexo o algoritmo deve ser e, portanto, o quanto demorará a geração do hash.
- a utilização do PASSWORD_DEFAULT como configuração garantirá a aleatorieada na configuração. 

~~~php
$texto = "Técnico em Desenvolvimento de Sistemas";
$codificado = password_hash($texto, PASSWORD_DEFAULT);
echo "Texto Codificado: ".$codificado."<br>";
~~~

- para cara execução da função password_hash, o resultado será um texto codificado de forma diferente, o que dificulta a quebra e a descoberta dessa hash.
- ***como fazer para verificar se a senha digitada será a correta***, se para cada utilização da função será criada uma nova string hash? 
    - utilizar a `função password_verify`!

~~~php
$texto = "Técnico em Desenvolvimento de Sistemas";
$codificado = password_hash($texto, PASSWORD_DEFAULT);
echo "Texto Codificado: ".$codificado."<br>";

if (password_verify("Técnico em Desenvolvimento de Sistemas", $codificado)) {
    echo 'Texto Correto';
    } else {
    echo 'Texto Incorreto';
    }
~~~

> Portanto, podemos afirmar que, quando a assunto é senha, o melhor é utilizar a APIpassword nativa no php!!!

---

<div align="center">
<h2>Você no Comando!</h2>
</div>

1. Crie um uma página PHP que contenha:
- a. Formulário com um campo para inserção de texto e um botão.
2. Ao clicar no botão, o texto inserido no campo deverá ser codificado em um algoritmo hash de sua
preferência (MD5, SHA1 etc.)
3. Exiba:
- Senha: “Texto Digitado”
- Senha Codificada: “Texto Codificado”
4. No título da página deverá constar o nome do algoritmo utilizado.

- Dicas:
    - Utilize no Formulário o Método Post;
    - Pode utilizar framework W3 css para estilização.

### a) Arquivo voceNoComando.php:

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
    <title>MD5</title>
</head>
<body>
    <form action="codifica.php" method="post" class="w3-container w3-card-4 w3-black w3-text-green w3-margin w3-display-middle" style="width: 30%;">
        <input type="hidden" name="nome_form" value="frmLogin" />
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-lock"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtTexto" placeholder="Insira Texto">
                </div>
            </div>
            <div class="w3-row w3-section">
                <button name="btnCrip" class="w3-button w3-block w3-margin w3-green w3-cell w3-roundlarge" style="width: 90%;">Criptografar</button>
            </div>
        </div>
    </form>
</body>
</html>
~~~

### b) Arquivo codifica.php:

~~~php
$texto = $_POST["txtTexto"];
$codificado = md5($texto);
echo "Senha codificada ".$texto." em MD5: ".$codificado."<br>";
~~~

---

## Fichário

- Imagine que você esteja concorrendo a uma vaga para integrar uma equipe de desenvolvimento WEB de uma empresa. No processo seletivo lhe foi solicitado que preparasse uma apresentação sobre criptografia em php.
- Para colocar em prática os assuntos estudados nessa agenda, prepare a apresentação em PowerPoint ou outro software de apresentações, abordando as funções MD5, SHA1 e PASSWORD_HASH, contendo Códigos de Exemplos e Imagens dos Resultados da execução dos códigos. Isso significa que você terá que criar os arquivos e executá-los em localhost para poder capturar as telas que você irá colocar na sua apresentação.
- Salve o arquivo e envie ao seu professor mediador.
- Importante: É necessário apresentar trechos de código utilizados na apresentação.

---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)