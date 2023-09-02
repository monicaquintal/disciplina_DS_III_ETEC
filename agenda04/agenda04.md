<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://www.svgrepo.com/show/477093/mobile-phone-signal.svg" /></a> 
<h2>Estudando Kodular 🤳</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda01" align="center">
<h2>Agenda 04: Consumindo API e serviços WEB.</h2>
</div>

## 1. Application Programming Interface (API):

- Interface de Programação de Aplicações.
- conjunto de padrões previamente desenvolvidos para gerar uma “ponte” entre dois sistemas ou mais, sejam eles produzidos na mesma ou em linguagens diferentes, permitindo a interação e troca de informações entre eles.
- o desenvolvimento de API surgiu com a necessidade de troca de informações entre instituições e serviços, e a comunicação tinha a necessidade de alta segurança, não bastando que determinada instituição fornecesse acesso ao seu banco de dados; precisava fornecer acesso apenas a um determinado conjunto de informações, não permitindo acesso geral.
- há várias formas de APIs, e cada uma se enquadra na utilização de recursos entre ferramentas.
- tipos:

### a) Dynamic-link library (DLL): 

- são classes criadas em linguagens de programação e distribuídas para que terceiros utilizem recursos sem a necessidade de perder tempo reescrevendo ou até mesmo recriando códigos. 
- exemplo: DLL que converte formatos de áudio para .mp3. 
  - pode ser utilizada por um sistema de gravação/edição de músicas, assim como pode ser utilizada em um projeto de gravação/edição de vídeos. 
  - em ambos os casos, os desenvolvedores não criam os códigos dessa DLL, utilizam os recursos oferecidos por essas classes, facilitando odesenvolvimento dos programas.

### b) Plugins: 

- encontradas na WEB e responsáveis por alguns serviços utilizados atualmente como certificação de login e senha, animação de interfaces, entre outros.
- exemplo: “Captcha”, responsável por atribuir uma segurança em
páginas WEB, para que certos serviços não sejammexecutados por Robôs.

### c) Frameworks: 

- amplamente utilizados na WEB atual.
- garantem recursos e envolvimentos visuais para sites.
- exemplos: JQuery e Bootstrap. 
  - o Bootstrap permite o desenvolvimento profissional de sites com um alto nível de interface gráfica e de maneira rápida, com construção de formulários, botões, menus, entre outros componentes que valorizam o projeto.

### d) WebAPI:

- tema desta agenda.
- são APIs disponíveis na WEB e que oferecem a interação entre ferramentas.
- utilizadas por meio de serviços disponíveis em sites/servidores de conteúdo.
- para o seu funcionamento é necessário seguir alguns padrões de criação e comunicação, utilizando protocolos de comunicação e códigos XML, JSON, entre outros.

> disponibilizado [link do site Cep Aberto](https://www.cepaberto.com/), que possui uma API responsável por receber um determinado CEP por meio da URL, e retornar um arquivo JSON com as informações do CEP consultado.

## 2. Arquivos de retorno utilizados pela maioria dos serviços WEB:

### a) Extensible Markup Language (XML)

- XML é um arquivo de marcação muito utilizado na Internet e em serviços WEB.
- desenvolvido pela W3C com o propósito de organizar textos, banco de dados, desenhos, etc.
- a organização ocorre hierarquicamente de maneira extensível: marcadores são customizáveis, garantindo a sua utilização nos mais diversos cenários.
- o modelo XML ficou popular no Brasil quando seus padrões foram implementados na nota fiscal eletrônica e seus arquivos eram utilizados no processo de comunicação entre as empresas e osservidores da receita para o processo de validação e conhecimento de uma nota fiscal.
- marcadores são destacados pela utilização das tags &lt;&gt;, e todo marcador aberto deve ser fechado.
- o padrão de arquivo XML ainda é amplamente utilizado em todo mundo, perdendo lugar aos poucos para o padrão JSON, que é uma nova forma de arquivos com marcações para trânsito de informações.

~~~xml
<?xml version="1.0"?>
<cliente>
  <nome>José</nome>
  <telefone>123456789</telefone>
  <endereco>Rua 10, n° 20</endereco>
</cliente>
<cliente>
  <nome>Maria</nome>
  <telefone>987654321</telefone>
  <endereco>Rua 30, n° 40</endereco>
</cliente>
~~~

### b) JavaScript Object Notation (JSON)

- o cenário de desenvolvimento WEB atualmente conta com a popularidade da utilização da linguagem JavaScript, que faz com que os programadores efetuem uma migração na utilização dos sistemas de comunicação, passando do XML para o JSON. 
- a cada dia o JSON ganha mais território no mundo da programação.
- por ser um objeto proveniente do JavaScript, o JSON é mais simples de ser utilizado na linguagem quando comparado ao XML. 
- pesquisas apontam que a utilização do JSON nos processos de troca de informações são mais eficientes, uma vez que ele é mais leve que o XML.
- no exemplo abaixo, é apresentado um Array (composto pelas tags "[]") de objetos (composto pelas tags "{}"), e dentro dos objetos tem os dados com valores.

~~~json
[
  {"nome": "José", "telefone": "123456789", "endereco": "Rua 10, n° 20"},
  {"nome": "Maria", "telefone": "987654321", "endereco": "Rua 30, n° 40"}
]
~~~

## 3. Consumindo Serviços WEB no navegador 

> Analisando um exemplo prático:

- várias empresas estão utilizando serviços WEB, e Serginho escolheu uma dessas empresas para utilizar em seu projeto. 
- o site ViaCEP proporciona uma consulta gratuita de CEP por meio de uma API. Ao consultar essa API, ela retorna um arquivo JSON com as informações do CEP.
- no exemplo a seguir, é mostrado a URL para utilizar a API, onde nesta
URL é transmitido o CEP que será consultado:

~~~
import requests

url = "https://www.cepaberto.com/api/v3/cep?cep="
// o seu token será visível apenas para você
headers = {'Authorization': 'Token token=128f297900b368f6ac2158e0f074bb72'}
params = {'estado': 'SP', 'cidade': 'Ubatuba'}
response = requests.get(url, headers=headers, params=params)

print(response.json())
~~~

- conteúdo do arquivo JSON com a resposta do CEP, exibida pelo navegador WEB que utilizamos na consulta:

~~~
{
  'latitude': '-23.4336578',
  'longitude': '-45.0838481',
  'estado': {'sigla': 'SP'},
  'cep': '11680000',
  'cidade': {'nome': 'Ubatuba', 'ddd': 12, 'ibge': '3555406'},
  'altitude': 4.8
}
~~~

## 4. Consumindo Serviços WEB no aplicativo

- para consumir um serviço WEB em um aplicativo, é necessário criar uma estrutura de componentes para conectar ao serviço e receber o objeto JSON. 
- por fim, temos que criar um layout para efetuar a interface gráfica com o usuário, ou seja, receber o CEP e mostrar as informações para o usuário.
- criar um projeto chamado “APICep”.

> Vídeo [Agenda 04 - Criando a interface consumindo API](https://www.youtube.com/watch?v=-3lgRiaPg9Q).
<br>
> Vídeo [Agenda 04 - Criando a programação de Blocos Consumindo API](https://www.youtube.com/watch?v=FvAG3KdTlxA).

--- 

## Fichário

<em>
"Dando continuidade ao aplicativo “ConsultaCEP”, desenvolvido na seção "Você no Comando", altere-o para que ele exiba também o CEP consultado na mensagem de retorno."
</em>




---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)
