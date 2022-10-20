<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="urna">
        <div class="tela" id="tela">
            <form action="back/votos/voto.php" method="POST">
                <input type="number" name="votoDepuFederal" id="votoDepuFederal">
                <input type="number" name="votoDepuEstadual" id="votoDepuEstadual">
                <input type="number" name="votoSenador" id="votoSenador">
                <input type="number" name="votoGovernador" id="votoGovernador">
                <input type="number" name="votoPresidente" id="votoPresidente">
                <input type="submit" value="Votar">

                <?php
                    if(isset($_SESSION['VotouMsg'])) {
                        echo $_SESSION['VotouMsg'];

                        session_destroy();
                    }
                ?>
            </form>
        </div>
        <div class="teclado">
            <div class="tecladoNums">
                <button class="btn" value="1" id="btn 1">1</button>
                <button class="btn" id="btn 2">2</button>
                <button class="btn" id="btn 3">3</button>
                <button class="btn" id="btn 4">4</button>
                <button class="btn" id="btn 5">5</button>
                <button class="btn" id="btn 6">6</button>
                <button class="btn" id="btn 7">7</button>
                <button class="btn" id="btn 8">8</button>
                <button class="btn" id="btn 9">9</button>
                <button id="in"></button>
                <button class="btn" id="btn 0">0</button>
                <button id="in"></button>
            </div>
            <div class="tecladoFuncs">
                <button id="btnBranco">BRANCO</button>
                <button id="btnCorrige">CORRIGIR</button>
                <button id="btnConfirmar" class="1">CONFIRMAR</button>
            </div>
        </div>
    </div>

    <audio id="audioConfirmar" src="sounds/som-confirma.mp3"></audio>
    <script src="main.js"></script>
</body>
</html>