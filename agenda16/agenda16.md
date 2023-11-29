<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"/></a>  
<h2>Estudando PHP! 🐘</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div align="center">
<h2>Agenda 16: Web Services gratuitos.</h2>
</div>

## 1. Introdução

- trata-se de uma interface desenvolvida para comunicação via rede que utiliza sobretudo os protocolos para sua comunicação. 
- HTTP é o protocolo mais utilizado para realizar esta comunicação!
- quando utilizamos uma API que necessita enviar dados por meio de rede, estamos falando de Web Services. Para realizar esta ação é utilizado abordagens como: SOAP, REST e XML-RPC.

### a) `SOAP` (Simple Object Access Protocol):

- protocolo de transferência de mensagem em formato XML.
- sua principal função é permitir que sites, programas etc possam trocar informações via protocolo HTTP. 
- trata-se de um protocolo para acessar um Web Service.

### b) `REST` (Representational State Transfer ou Transferência de Estado Representacional):

- é bem diferente de outros métodos web service.
- é outro protocolo de comunicação, baseado no protocolo de hipermídia HTTP. 
- ***porém*** ele não impõe restrições ao formato da mensagem, apenas no comportamento dos componentes envolvidos.

### c) `XML-RPC`:

- trata-se de uma especificação e algumas implementações que disponibilizam que o software seja executado em sistemas operacionais diferentes.
- foi projetado para ser o mais simples possível, enquanto permite que estruturas de dados complexas sejam transmitidas, processadas e recebidas.
- o XML Web service é o mais utilizado em desenvolvimento. 
- esse serviço possui dois alicerces:
  - utilização do protocolo de internet HTTP para fazer a comunicação.
  - o envio e recebimento por meio de dados em formato XML.

> Um Web service pode:
1. Ser capaz de agir como o solicitante e o provedor de um serviço.
2. Ser registrado com um discovery agent por meio do qual possam serlocalizados.

- Exemplo de conversação entre web services:
  - o cliente que inicia o pedido pelo serviço também é um web service. 
  - qualquer interface exposta por este cliente service, também o torna um serviço, que qualquer outro cliente pode solicitar informação. 
  - portanto, ***web services não se enquadram no modelo de cliente-servidor padrão***, tendem a criar um sistema de comunicação ponto-a-ponto, onde cada serviço pode atuar como cliente ou servidor!

## 2. Consumindo web services:

- web services foram criados a partir da necessidade de integração e comunicação entre sistemas diferentes (arquiteturas, tecnologias, geração), sendo possível trocar informações entre aplicações, softwares e sistemas totalmente diferentes por meio de arquivos XML, tornando a comunicação independente de linguagem, sistema operacional e etc.
- existem muitos Web Services gratuitos ou pagos que oferecem recursos, evitando a reescrita de códigos.
- exemplos: 
  - Web Service dos Correios, para busca de CEP.
  - Web Service da Google, que permite localizar endereços, bairros, cidades e localizações por meio do seu programa GoogleMaps.

## 3. Utilizando um web service de CEP:

- utilizaremos um webservice disponível [aqui](https://viacep.com.br/), gratuito e de alto desempenho para consultar Códigos de Endereçamento Postal (CEP) do Brasil.
- no site há instruções de uso e exemplos de como fazer a utilização do web service. 

### a) Na prática:

1. criar dois arquivos na pasta root do servidor apache: [index.php](./projects/cep/index.php) e [buscarCEP.php](./projects/cep/buscarCep.php).

2. utilizar uma URL como: viacep.com.br/ws/14000000/xml/, sendo:
  - viacep.com.br/: nome do site.
  - ws: indicação para o webService.
  - 14000000: parâmetro de Busca CEP.
  - xml: formato da resposta XML.
Criar uma função denominada get_endereco, fazendo a alusão aos métodos getters de uma classe; o método terá um parâmetro denominado CEP, através do qual será inserido o CEP na URL.

3. garantir que o CEP terá apenas números.

4. montar a URL em uma variável.
  - o CEP que for passado como parâmetro pela função será
enviado pela URL. 

5. usar o comando simplexml_load_file(), que fará a requisição ao Web
Service e nos retornará um XML, que será atribuído em uma variável de mesmo nome.

6. retornar o XML.

7. criar uma variável "endereço", que receberá o retorno da função get_endereco e terá como parâmetro o conteúdo do input txtCEP.
  - nesse momento, o contéudo da variável endereço é um XML, como no exemplo a seguir, retirado do viacep:

~~~xml
<?xml version="1.0" encoding="UTF-8"?>
  <xmlcep>
    <cep>01001-000</cep>
    <logradouro>Praça da Sé</logradouro>
    <complemento>lado ímpar</complemento>
    <bairro>Sé</bairro>
    <localidade>São Paulo</localidade>
    <uf>SP</uf>
    <unidade></unidade>
    <ibge>3550308</ibge>
    <gia>1004</gia>
  </xmlcep>
~~~

- então, teremos algumas informações disponíveis como: CEP, Logradouro (rua, avenida etc), Complemento, Bairro, Localidade (cidade), UF (estado), entre outras.
- portanto, basta acessar as informações desejadas e utiliza-las; tratar a variável como um objeto, e tratar como atributo cada item do XML.

~~~php
// Código-fonte do arquivo buscarCEP.php

function get_endereco($cep) {
  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";
  $xml = simplexml_load_file($url);
  return $xml;
}

$endereco = get_endereco($_POST["txtCEP"]);

echo "Rua: $endereco->logradouro";
echo "<br>";
echo "Complemento: $endereco->complemento";
echo "<br>";
echo "Bairro: $endereco->bairro";
echo "<br>";
echo "Cidade: $endereco->localidade";
echo "<br>";
echo "Estado: $endereco->uf";
echo "<br>";
echo "<br>";
~~~

---

## Você no Comando

1. Faça o download do arquivo da página de contatos do cleber.
2. Faça com que o campo CEP tenha um botão ao seu lado. Ao ser clicado pelo usuário, os dados do endereço (Logradouro, Bairro, Cidade, Estados) do cliente sejam preenchidos nos campos correspondentes.
Dicas:
- Utilize no Formulário o Método Post.
- No Action coloque “#”, isso fará que o formulário chame a própria página.
- Utilize Session para armazenar informações vindas do web service.

> Arquivo [voceNoComando.php](./projects/voce-no-comando/voceNoComando.php).
---

## Fichário

- "Juarez, proprietário e CEO da empresa multinacional Enlatados Juarez, gostou muito do trabalho que Sérgio fez para o e-commerce da lanchonete do seu amigo Cleber e o convidou para uma entrevista de emprego. Sérgio, então, terá que fazer uma apresentação sobre o funcionamento dos webservices para a equipe de TI da empresa.
- Para estudar mais sobre o assunto e deixar seu conhecimento bem afiado, imagine que você também tenha que fazer essa apresentação para, quem sabe, fazer parte da equipe de TI da empresa. Para isso, será necessário abordar os conceitos e mostrar exemplos práticos.
- Capriche nessa apresentação, mostrando as habilidades adquiridas.
- Vamos lá?
- Dicas:
  - Para os exemplos práticos você pode criar vídeos explicando o passo a passo do funcionamento.
  - Você pode desenvolver um site e usa-lo como apresentação.
- Use sua imaginação e nos surpreenda!"

---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)