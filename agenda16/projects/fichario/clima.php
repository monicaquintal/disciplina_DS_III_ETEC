<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Clima</title>
</head>
<body>
    <h1>Consulta de Clima</h1>
    <form method="post" action="">
        <label for="cidade">Informe a cidade: </label>
        <input type="text" id="cidade" name="cidade" required>
        <button type="submit">Consultar Clima</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cidade = $_POST["cidade"];
        $api_key = "API_KEY";
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$cidade&APPID=$api_key&lang=pt_br";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if ($data["cod"] == 200) {
            $temperatura = $data["main"]["temp"] - 273.15;
            $descricao = $data["weather"][0]["description"];
            $icon = $data["weather"][0]["icon"];

            echo "<p>O clima em $cidade é: $descricao</p>";
            echo "<p>Temperatura: $temperatura &#8451;</p>";
            echo "<img src='http://openweathermap.org/img/w/$icon.png' alt='Clima'>";
        } else {
            echo "<p>Não foi possível obter informações sobre o clima para $cidade.</p>";
        }
    }
    ?>
</body>
</html>