<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação - Resultado</title>
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

    <h2>Jogo adivinha número</h2>
    <?php
    $chancesTotais = 3;
    $numeroAleatorio = isset($_POST["numeroAleatorio"]) ? $_POST["numeroAleatorio"] : rand(0, 10); // Verifica se há um número aleatório já gerado

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palpite = $_POST["palpite"];

        if ($palpite != "" && is_numeric($palpite) && $palpite >= 0 && $palpite <= 10) {
            if ($palpite == $numeroAleatorio) {
                echo "<p>Parabéns! Você acertou o número $palpite!</p>";
            } else {
                $chancesTotais--;
                if ($chancesTotais > 0) {
                    echo "<p>Ops! O número $palpite não é o correto. Você ainda tem $chancesTotais chances.</p>";
                } else {
                    echo "<p>Você perdeu! O número era $numeroAleatorio.</p>";
                }
                echo "<form action='jogoAdivinhaNumero.php' method='post'>";
                echo "<input type='hidden' name='numeroAleatorio' value='$numeroAleatorio'>"; // Passa o número aleatório como um campo oculto
                echo "<input type='submit' value='Tentar Novamente'>";
                echo "</form>";
            }
        } else {
            echo "<p>Por favor, insira um número válido entre 0 e 10.</p>";
        }
    }
    ?>
</body>
</html>




