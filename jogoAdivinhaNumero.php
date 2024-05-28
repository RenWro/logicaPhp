<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação - Resultado</title>
    <style>
        body {
            background-color: #F2EED8; /* Cor de fundo do corpo */
            font-family: 'Helvetica', sans-serif; /* Tipo de fonte para todo o corpo */
            text-align: center; /* Alinha todo o texto ao centro */
        }
            h1 {
                color: #011C40; /* Cor do texto para o título h1 */
                font-weight: bold; /* Torna o texto em negrito */
        }
        input[type="submit"] {
            background-color: #419116; /* Cor de fundo do botão */
            color: #011C40; /* Cor do texto do botão */
            font-family: 'Helvetica', sans-serif; /* Tipo de fonte do botão */
            padding: 6px 10px; /* Adiciona preenchimento ao botão */
            cursor: pointer; /* Muda o cursor para indicar que é clicável */
            border: none; /* Remove a borda padrão */

        }
        input[type="submit"]:hover {
            background-color: #e03528; /* Cor de fundo do botão ao passar o mouse */
        }
    </style>
</head>
<body>
    <!--Em PHP, isset() é uma função usada para verificar se uma variável está definida e não é nula. Ela retorna true
    se a variável estiver definida e não for nula, e false caso contrário. Isso é útil para evitar erros ao tentar
    acessar variáveis que podem não existir ou que podem ser nulas.
    -->
    <!-- Crie um jogo que após gerar valores aleatórios entre 0 e 10 enviado pelo usuário via formulário, verifica se o
        palpite está dentro do intervalo permitido e depois usamos o caso para verificar se o palpite dela está correto. No
        final imprima uma mensagem à jogadora a parabenizando-a pelo acerto e deixando-a jpgar novamente.
    -->
<body>
    <h2>Jogo de Adivinhar Número</h2>
     <img src="https://data.textstudio.com/output/sample/animated/1/2/3/5/guess-2-5321.gif" alt="Adivinhe">
    <?php
    session_start(); // Inicia a sessão para manter estado entre as solicitações

    if (!isset($_SESSION['numeroAleatorio'])) { // Se não existir um número, cria um
        $_SESSION['numeroAleatorio'] = rand(0, 10);
        $_SESSION['chancesTotais'] = 3; // Define o total de chances
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["palpite"])) {
        $palpite = $_POST["palpite"];
        if ($palpite != "" && is_numeric($palpite) && $palpite >= 0 && $palpite <= 10) {
            if ($palpite == $_SESSION['numeroAleatorio']) {
                echo "<p>Parabéns! Você acertou o número $palpite!</p>";
                session_destroy(); // Encerra a sessão e começa um novo jogo
            } else {
                $_SESSION['chancesTotais']--;
                if ($_SESSION['chancesTotais'] > 0) {
                    echo "<p>Ops! O número $palpite não é o correto. Você ainda tem {$_SESSION['chancesTotais']} chances.</p>";
                } else {
                    echo "<p>Você perdeu! O número era {$_SESSION['numeroAleatorio']}.</p>";
                    session_destroy(); // Encerra a sessão e começa um novo jogo
                }
            }
        } else {
            echo "<p>Por favor, insira um número válido entre 0 e 10.</p>";
        }
    }
    ?>
    <form action='jogoAdivinhaNumero.php' method='post'>
        <label for="palpite">Digite seu palpite:</label>
        <input type='number' id='palpite' name='palpite' min='0' max='10'>
        <input type='submit' value='Enviar Palpite'>
    </form>
</body>
</html>



