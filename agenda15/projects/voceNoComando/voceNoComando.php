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