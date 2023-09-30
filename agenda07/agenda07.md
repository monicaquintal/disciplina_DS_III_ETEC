<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="left" height="90" src="https://www.svgrepo.com/show/477093/mobile-phone-signal.svg" /></a> 
<h2>Estudando Kodular 🤳</h2>
<p>Desenvolvimento de Sistemas III - ETEC</p>
</div>

<div id="agenda07" align="center">
<h2>Agenda 07: Sensores.</h2>
</div>

## 1. Sensores

- são componentes de hardware e/ou software que permitem ao dispositivo uma interação com o ambiente.
- capturam dados, analisam e devolvem informações ao aparelho e ao usuário.
- o sistema operacional Android suporta a maioria dos sensores dos aparelhos.
- os aparelhos não possuem todos os tipos de sensor, depende do fabricante e da versão do dispositivo.
- há dois tipos de sensores:

### a) sensores a nível de hardware:
- sensores que são componentes eletrônicos físicos para capturar determinada informação.
- exemplos: temperatura, iluminação de um ambiente.

### b) sensores baseados em software (sensores virtuais):
- são sensores que, para entregar um determinado dado, capturam informações de um ou mais sensores de hardware, e processam essas
informações para entregar um resultado.
- exemplo: sensor de aceleração linear.

> Conteúdo do site oficial do Android Studio sobre Sensores [aqui](https://developer.android.com/guide/topics/sensors/sensors_overview?hl=pt-br).

<div align="center">

Sensor | Tipo | Descrição | Usos comuns
--------|-------|-----------|--------------
TYPE_ACCELEROMETER | Hardware | Mede a força de aceleração em m/s² que é aplicada a um dispositivo nos três eixos físicos (x, y, z), incluindo a força da gravidade. | Detecção de movimento (agitação, inclinação etc.).
TYPE_AMBIENT_TEMPERATURE | Hardware | Mede a temperatura ambiente em graus Celsius (°C). | Monitoramento das temperaturas do ar.
TYPE_GRAVITY | Software ou hardware | Mede a força da gravidade em m/s² que é aplicada a um dispositivo nos três eixos físicos (x, y, z). | Detecção de movimento (agitação, inclinação etc.).
TYPE_GYROSCOPE | Hardware | Mede a taxa de rotação de um dispositivo em rad/s em torno de cada um dos três eixos físicos (x, y, z). | Detecção de rotação (giro, volta etc.).
TYPE_LIGHT | Hardware | Mede o nível de luz ambiente (iluminação) em lx. | Controle do brilho da tela.
TYPE_LINEAR_ACCELERATION | Software ou hardware | Mede a força de aceleração em m/s² que é aplicada a um dispositivo nos três eixos físicos (x, y, z), exceto a força da gravidade. | Monitoramento da aceleração em um único eixo.
TYPE_MAGNETIC_FIELD | Hardware | Mede o campo geomagnético do ambiente para os três eixos físicos (x, y, z) em μT. | Criação de uma bússola.
TYPE_ORIENTATION | Software | Mede os graus de rotação que um dispositivo faz em torno dos três eixos físicos (x, y, z). A partir do nível 3 da API, é possível encontrar as matrizes de inclinação e de rotação de um dispositivo usando o sensor de gravidade e o sensor de campo geomagnético combinados com o método getRotationMatrix(). | Determinação da posição do dispositivo.
TYPE_PRESSURE | Hardware | Mede a pressão do ar ambiente em hPa ou mbar. | Monitoramento das mudanças na pressão do ar.
TYPE_PROXIMITY | Hardware | Mede a proximidade de um objeto em cm com relação à tela de um dispositivo. Em geral, esse sensor é usado para determinar se um dispositivo móvel está próximo do ouvido de uma pessoa. | Posição do smartphone durante uma chamada.
TYPE_RELATIVE_HUMIDITY | Hardware | Mede a umidade relativa do ar em porcentagem (%). | Monitoramento de ponto de condensação, umidade absoluta e relativa.
TYPE_ROTATION_VECTOR | Software ou hardware | Mede a orientação de um dispositivo informando os três elementos do vetor de rotação do dispositivo. | Detecção de movimento e de rotação.
TYPE_TEMPERATURE | Hardware | Mede a temperatura do dispositivo em graus Celsius (°C). A implementação deste sensor varia de um dispositivo para outro, e ele foi substituído pelo sensor TYPE_AMBIENT_TEMPERATURE na API nível 14. | Monitoramento de temperaturas.

</div>

## 2. Estrutura do Sensor

- o sensor do dispositivo é utilizado através de uma estrutura padrão, estabelecida pelo Android. 
- o acesso aos seus dados brutos é feito através de classes Java para facilitar o processo de desenvolvimento de aplicativos. 
- principais classes para trabalho com sensores:

### a) SensorManager: 
- utilizado para criar uma instância dos serviços dos sensores presentes no aparelho, com métodos para facilitar o desenvolvimento do aplicativo. 
- permite iniciar e parar o uso do sensor, calibrar, verificar a precisão, entre outras funções.

### b) Sensor:
- classe utilizada para trabalhar com métodos de um sensor em específico, obtido através do SensorManager.

### c) SensorEvent: 
- classe utilizada para criar um objeto sobre determinado evento do sensor, com os dados, horário, precisão do sensor, qual tipo de sensor foi utilizado, entre outras informações.

### d) SensorEventListener:
- utilizada para criar duas ações sobre um determinado sensor que esteja em uso.
- as ações são disparadas quando o valor do sensor que está sendo verificado sofre uma mudança chamado de onSensorChanged(), e outra ação que é disparada quando a precisão do sensor sofre uma alteração chamada de onAccuracyChanged().

## 3. Boas Práticas ao utilizar Sensores

- levar em consideração alguns fatores, como o uso desnecessário da bateria do aparelho. 
- por padrão, o Android não desabilita um sensor quando a tela do dispositivo é desligada.
  - ou seja, o desenvolvedor mobile necessita trabalhar com métodos para que o sensor seja desligado quando o mesmo não estiver em uso!
- alguns sensores exigem um alto uso da bateria do aparelho durante seu funcionamento, e deixar esses sensores ativos mesmo não sendo utilizados pode gerar alguns problemas e insatisfação do usuário com o app. 

## 4. Trabalhando com Sensores

- inicialmente, pesquisar a [documentação oficial do Android](https://developer.android.com/guide/topics/sensors?hl=pt-br) para conhecer a forma correta de trabalho para cada sensor.
- no projeto que será desenvolvido, vamos utilizar um sensor de luz, que captura o valor de iluminação recebida por um determinado dispositivo. 

## 5. Projeto - "Sensores"

- Criando a [Interface Sensores](https://www.youtube.com/watch?v=7mjViEAlJiA).
- Desenvolvendo a [Programação em Blocos](https://www.youtube.com/watch?v=uuyHxX8j9BM).

---

## Fichário:

- Altere o projeto “Sensores”, para que seja mostrada na tela do usuário, além dos valores atuais, o maior valor encontrado e o menor valor encontrado de luminosidade.

<div align="center">

https://github.com/monicaquintal/disciplina_DS_III_ETEC/assets/111545468/5e18a653-c5d4-47d3-ac61-0fd05f63e0e1

</div>

---

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_III_ETEC)
