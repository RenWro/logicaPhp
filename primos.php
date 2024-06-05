<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de números primos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4e7c6; /* Cor de fundo amarelo pastel */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .content {
            width: 80%;
            max-width: 600px;
            text-align: center;
        }
        .description {
            text-align: justify;
            margin-bottom: 20px;
        }
        .container {
            background-color: #ffdead;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
        }
        h2 {
            color: #011C40;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form label, form input {
            margin: 5px 0;
        }
        form input[type="submit"] {
            margin-top: 10px;
        }
        img {
            max-width: 100%;
            height: auto;
            width: 800px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h2>Problema: Verificador de Números Primos</h2>
        <img src="https://media.tenor.com/pW4IHk9DBKAAAAAM/son-primos-denise-dumas.gif" alt="Gif ´Son Primos!'">
        <!--
        <p class="description">
            Desenvolva um programa que recebe um número inteiro positivo fornecido pelo usuário e verifica se esse
            número é primo ou não. Para isso, você pode criar uma função que recebe o número como entrada e retorna
            true se o número for primo e false caso contrário.
            Um número é considerado primo se for divisível apenas por 1 e por ele mesmo.
            Para implementar essa verificação, você pode usar uma estrutura de repetição para iterar sobre os
            possíveis divisores do número, que são os números inteiros de 2 até a raiz quadrada do número.
        </p>
        -->        <div class="container">
            <h2>Resultado</h2>
            <form method="post" action="">
                <label for="numero">Digite um número:</label>
                <input type="number" name="numero" id="numero" required><br>
                <input type="submit" value="Verificar Número">
            </form>

            <?php
            function ehPrimo($num) {
                if ($num <= 1) return false;
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) return false;
                }
                return true;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = $_POST['numero'];
                if (ehPrimo($numero)) {
                    $resultado = "é primo";
                } else {
                    $resultado = "não é primo";
                }
                echo "<p>O número <b>$numero</b> <b>$resultado</b>.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
