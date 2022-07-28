<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Jogo do Dado!</title>
</head>
<body>
    <div class="view-width">
        <div class="square-width">
            <div class="titulo">
                <h1 class="texto-titulo">Jogo do Dado!</h1>
            </div>
            <div class="body-width">
                <div class="input-button">
                    <div class="buttons">
                        <button id="jogador1">Jogador 1</button>
                        <button id="jogador2">Jogador 2</button>
                    </div>
                    <div class="inputs">
                        <input type="hidden" id="dado1msg">
                        <input type="hidden" id="dado2msg">
                    </div>
                    <div id="resultado">
                        <div id="dado1img"></div>
                        <div id="dado2img"></div>
                    </div>
                    <div id="resultadoJogo"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="jquery-3.6.0.js"></script>
    <script src="controller.js"></script>
</body>
</html>