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










---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)