<?php
session_start(); // Mantém o estado entre requisições.

// Inicializa o jogo se não estiver já inicializado.
if (!isset($_SESSION['numeroAleatorio'])) {
    $_SESSION['numeroAleatorio'] = rand(0, 10);
    $_SESSION['tentativas'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["palpite"])) {
    $palpite = intval($_POST["palpite"]);
    $_SESSION['tentativas']++; // Incrementa o número de tentativas.

    if ($palpite == $_SESSION['numeroAleatorio']) {
        $mensagem = "Parabéns! Você acertou o número {$palpite} após {$_SESSION['tentativas']} tentativas!";
        session_destroy(); // Reinicia o jogo.
    } else {
        switch (true) {
            case ($palpite < $_SESSION['numeroAleatorio']):
                $mensagem = "Muito baixo! Tente um número maior. Tentativas: {$_SESSION['tentativas']}";
                break;
            case ($palpite > $_SESSION['numeroAleatorio']):
                $mensagem = "Muito alto! Tente um número menor. Tentativas: {$_SESSION['tentativas']}";
                break;
        }
    }
} else {
    $mensagem = "Tente adivinhar o número secreto entre 0 e 10.";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação de Números Com Tentativas</title>
    <style>
        body {
            background-color: #C1C8E4;
            font-family: 'Helvetica', sans-serif;
            text-align: center;
        }
        h1 {
            color: #011C40;
            font-weight: bold;
        }
        input[type="submit"] {
            background-color: #E69B6D;
            color: #011C40;
            font-family: 'Helvetica', sans-serif;
            padding: 6px 10px;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #E3BD1E;
        }
    </style>
</head>
<body>
    <h2>Jogo de Adivinhação de Números Com Tentativas</h2>
    <img src="https://global.discourse-cdn.com/nubank/original/4X/f/b/6/fb6485886dc4ab58ea99c0ecf83e457a9b5cc4ff.gif" alt="Imagem cômica de Palpite">
    <p><?php echo $mensagem; ?></p>
    <form action="" method="post">
        <label for="palpite">Digite seu palpite:</label>
        <input type="number" id="palpite" name="palpite" min="0" max="10">
        <input type="submit" value="Enviar Palpite">
    </form>
</body>
</html>
