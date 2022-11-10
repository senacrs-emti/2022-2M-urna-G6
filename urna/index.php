<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="urna">
        <div class="tela" id="tela">
            
        </div>
        <div class="teclado">
            <div class="numeros">
                <button class="btnNum" value="1">1</button>
                <button class="btnNum" value="2">2</button>
                <button class="btnNum" value="3">3</button>
                <button class="btnNum" value="4">4</button>
                <button class="btnNum" value="5">5</button>
                <button class="btnNum" value="6">6</button>
                <button class="btnNum" value="7">7</button>
                <button class="btnNum" value="8">8</button>
                <button class="btnNum" value="9">9</button>
                <button class="inv"></button>
                <button class="btnNum" value="0">0</button>
                <button class="inv"></button>
            </div>
            <div class="acoes">
                <button id="btnBranco">BRANCO</button>
                <button id="btnCorrige">CORRIGE</button>
                <button id="btnConfirmar">CONFIRMAR</button>
            </div>
        </div>
    </div>

    <script src="js/main.js" type="module"></script>
    <script src="js/btns.js"></script>
</body>
</html>