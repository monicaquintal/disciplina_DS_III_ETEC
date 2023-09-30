<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://www.svgrepo.com/show/477093/mobile-phone-signal.svg" /></a> 
<h2>Estudando Kodular 🤳</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda08" align="center">
<h2>Agenda 08: Localização.</h2>
</div>

## 1. GPS (Global Positioning System)

-  para que a localização seja enviada, primeiramente o dispositivo efetua uma busca e localiza as coordenadas geográficas que o aparelho se encontra.
- para localizar as coordenadas, o dispositivo utiliza o sistema de GPS, que são informações obtidas através de satélites e processadas para estipular uma determinada localização.
- o sistema de GPS é controlado pelo Governo Norte Americano, e é gratuito para utilização da população mundial. 
- hoje é um hardware básico em qualquer aparelho.

## 2. Localização no Android

- segundo o [site oficial de desenvolvimento do Android](https://developer.android.com/guide/topics/location/strategies):
  - “Saber onde o usuário está permite que seu aplicativo seja mais inteligente e forneça melhores informações ao usuário. 
  - Ao desenvolver um aplicativo com reconhecimento de local para Android, você pode utilizar o provedor de localização de rede do GPS e do Android para adquirir o local do usuário.
  - Embora o GPS seja mais preciso, ele só funciona ao ar livre, consome rapidamente a energia da bateria e não retorna à localização tão rapidamente quanto os usuários desejam. 
  - O provedor de localização de rede do Android determina a localização do usuário usando sinais de torre de celular e Wi-Fi, fornecendo informações de localização de maneira interna e externa, responde mais rapidamente e usa menos energia da bateria. 
  - Para obter a localização do usuário em seu aplicativo, você pode usar o GPS e o Network Location Provider, ou apenas um”.

- quando o projeto requerer uma localização mais precisa do aparelho, é fundamental utilizar o GPS, em conjunto com o provedor do Android ou sozinho. 
- o sistema de localização que não utiliza GPS pode prover uma localização com uma margem de erro maior, ou seja, pode atribuir uma localização com um erro de quilômetros da realidade do dispositivo.

<div align="center">

Desafios na determinação da localização do usuário | Descrição
---------------------------------------------------|-----------
Várias origens de localização | GPS, Cell-ID e Wi-Fi podem fornecer uma pista para a localização de usuários. Determinar qual usar e confiar é uma questão de compensações em precisão, velocidade e eficiência da bateria.
Movimento do usuário | Como a localização do usuário é alterada, você deve contabilizar o movimento reestimando a localização do usuário de vez em quando.
Precisão de variação | As estimativas de localização provenientes de cada fonte de localização não são consistentes em sua precisão. Uma localização obtida há 10 segundos a partir de uma fonte pode ser mais precisa do que a localização mais recente de outra ou da mesma fonte!

</div>

## 3. Obter a localização através da classe Location Manager

- o sistema Android possui classes para facilitar o desenvolvimento de aplicativos. 
- A `LocationManager`` foi desenvolvida para que o aplicativo comunique com o sistema de localização do dispositivo, seja através do GPS ou pelo provedor de localizações.
- a classe pode ser utilizada para solicitar em determinados intervalos de tempo a localização do aparelho, ou também pode ser programada para que quando o dispositivo entre em uma determinada área geográfica chame uma aplicação ou serviço.

## 4. Permissões de uso para a localização do aparelho

- o sistema de localização do aparelho vem bloqueado para os aplicativos. 
- informar no arquivo Manifest.xml a intenção de utilizar esse hardware do aparelho.

## 5. Projeto Localização

- Construção da interface do [aplicativo Localizacao](https://www.youtube.com/watch?v=JoKmxyaFj10).
- Criando a programação em blocos [GPS](https://www.youtube.com/watch?v=t38VvJ3l_do).






---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)
