<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://www.svgrepo.com/show/477093/mobile-phone-signal.svg" /></a> 
<h2>Estudando Kodular 🤳</h2>
<p>Disciplina: Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda01" align="center">
<h2>Agenda 02: Compartilhar fotos.</h2>
</div>

- a plataforma Kodular permite ao usuário a opção de criar um aplicativo que possibilite o acionamento da câmera do seu dispositivo móvel e em seguida, compartilhar esta imagem.

## 1. Estrutura do projeto “Compartilhar”

> O projeto terá interface simples, na qual o usuário poderá tirar uma foto e compartilhar através do aplicativo, que verifica as possibilidades de compartilhamento do seu dispositivo móvel.

## 2. Criando o projeto

> Vídeo tutorial [aqui](https://www.youtube.com/watch?v=ISLh89BkMV0).

- Abrir a plataforma de desenvolvimento do [Kodular](https://www.kodular.io/creator).
- Clicar no botão "Create Project".
- Digitar o nome "Compartilhar" e clicar no botão Next.
- Clicar no botão Finish para finalizar a criação do novo projeto.
- Alterar as propriedades do objeto SCREEN:

<div align="center">

Propriedade | Valor | Função
------------|-------|-----------
Align Vertical | Center | Definir o alinhamento vertical.
Title | Informações Dispositivo | Definir o título da aplicação em desenvolvimento.

</div>

- Escolher um ícone para sua aplicação, sendo que a padronização do ícone deverá ser feita pelo botão
Configurações.
- Clicar na aba "Drawing and Animation" na Pallete.
- Clicar no componente Canvas e arrastar para área VIEWER.
- Alterar as propriedades do componente Canvas.

<div align="center">

Propriedade | Valor | Função
------------|-------|-----------
Height | 200px | Definir a altura do componente Canvas.
Width | 200px | Definir a largura do componente Canvas.
Background Image | Camera.png | O aluno deverá fazer o download da internet de uma image no formato png e salvar como nome de camera.png. Em seguida, deverá fazer o upload e definir esta imagem como imagem de fundo do componente Canvas.
Name | cnv_Camera | Definir o nome do componente

</div>

- Inserir um componente Button, categoria User Interface.
- Alterar as propriedades do componente Button.

<div align="center">

Propriedade | Valor | Função
------------|-------|---------
Background color | #6291F8FE | Definir a cor do fundo do componente button.
Width | 200px | Definir a largura do componente button.
Font Bold | ✓ | Marcado Definir a opção negrito
Font Size | 18 | Definir o tamanho da fonte
Text | Tirar Foto | Definir o conteudo a ser exibido do componente button.
Name | btn_Foto | Definir o nome do componente.

</div>

- Inserir o componente "Space" da categoria Layout, categoria General na área de VIEWER, e alterar suas propriedades.

<div align="center">

Propriedade | Valor | Função
------------|--------|----------
Height | 40px | Definir a altura em px para representar o espaçamento.
Name | spc_Linha01 | Definir o nome do componente.

</div>

- Clicar no componente "Label" na aba Interface User e inserir na área de VIEWER.
- Alterar as propriedades do objeto Label.

<div align="center">

Propriedade | Valor | Função
------------|-------|---------
Font Size | 18 | Definir o tamanho da fonte.
Font Bold | ✓ | Marcado Definir a opção de negrito na fonte.
Text | Digite a Legenda | Definir o texto que será apresentado pelo Label.
Name | lbl_Legenda | Definir o nome do componente.

</div>

- Inserir o componente TextBox (categoria User Interface) na área VIEWER, para que o usuário possa digitar a legenda que irá acompanhar a imagem da foto.
- Alterar as propriedades do componente TextBox.

<div align="center">

Propriedade | Valor | Função
-----------|-------|--------
Font Size | 18 | Definir o tamanho da fonte.
Font Bold | ✓ | Marcado Definir a opção de negrito na fonte.
Width | Fill Parent | Definir a largura total disponível para o componente.
Input Type | Number | Definir que o conteúdo deste componente, seja somente números.
Text Alignment | Center | Definir o alinhamento ao centro.
Text | Em Branco | Definir o texto que será apresentado pelo Label.
Hint | Em Branco | Definir sem dicas no campo.
Name | txt_Legenda | Definir o nome do componente.

</div>

- Inserir um componente Button, categoria User Interface.
- Alterar as propriedades do componente Button.

<div align="center">

Propriedade Valor Função
Background color | #F6332CFE | Definir a cor do fundo do componente button.
Width | 200px | Definir a largura do componente button.
Font  | Bold ✓ | Marcado Definir a opção negrito.
Font Size | 18 | Definir o tamanho da fonte.
Text | Compartilhar | Definir o conteudo a ser exibido do componente button.
Name | btn_Compartilhar | Definir o nome do componente.

</div>

- Inserir o componente Space da categoria Layout, categoria General na área de VIEWER.
- Alterar as propriedades do objeto Space.

<div align="center">

Propriedade | Valor | Função
-----------|--------|----------
Height | 40px | Definir a altura em px para representar o espaçamento.
Name | spc_Linha02 | Definir o nome do componente.

</div>

- Inserir um componente Button, categoria User Interface.
- Alterar as propriedades do componente Button.

<div align="center">

Propriedade | Valor | Função
------------|-------|----------
Background color | #F6332CFE | Definir a cor do fundo do componente button.
Width | 200px | Definir a largura do componente button.
Font | Bold ✓ Marcado | Definir a opção negrito.
Font Size | 18 | Definir o tamanho da fonte.
Text | Limpar | Definir o conteudo a ser exibido do componente button.
Name  | btn_Limpar  | Definir o nome do componente

</div>

- Clicar na categoria Media na Pallete.
- Inserir um componente Camera na área VIEWER.
- Alterar as propriedades do componente Camera.

<div align="center">

Propriedade | Valor | Função
------------|-------|-------
Name | cmr_Foto | Definir o nome do componente.

</div>

- Clicar na categoria Social na Pallete.
- Inserir um componente Sharing na área VIEWER.
- Alterar as propriedades do componente Sharing.

<div align="center">

Propriedade | Valor | Função
-------------|------|----------
Name | share_Foto | Definir o nome do componente.

</div>

> Os componentes Camera e Sharing são invisiveis na Área VIEWER, mas a programação em blocos irá funcionar normalmente.

## 3. Programação em blocos (Blocks)

> Vídeo tutorial [aqui](https://www.youtube.com/watch?v=h3TlX_PiIt4).

### Importante:

Para correção do erro 201, acessar [esse vídeo](https://www.youtube.com/watch?v=zez3ohGtUUE).

---

## Fichário

"Envie para o seu tutor um vídeo mostrando a tela do celular com o projeto realizado por você na etapa. É importante demonstrar as funcionalidades desenvolvidas até aqui. Envie também os códigos utilizados.
<br>
Aproveite para customizar o projeto “Compartilhar” com suas cores e uma imagem escolhida por você."

--- 

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)
