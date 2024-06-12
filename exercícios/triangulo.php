<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio do triângulo - Desafio 4</title>
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
            width: 200px; /* Ajuste o valor conforme necessário */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h2>Problema</h2>
        <img src="https://i.pinimg.com/originals/c6/a1/ce/c6a1cebac408f7197a10dca7320c395a.gif" alt="Gif de um triângulo psicodélico">
        <p class="description">
            Crie um programa que, após receber 3 valores inteiros, valida se os valores fornecidos formam qual tipo de
            triângulo. Após, imprima qual triângulo foi formado:
            <ul>
                <li>3 lados iguais (equilátero)</li>
                <li>2 lados iguais e um diferente (isósceles)</li>
                <li>3 lados diferentes (escaleno)</li>
            </ul>
        </p>
        <div class="container">
            <h2>Resultado</h2>
            <form method="post" action="">
                <label for="lado1">Lado 1:</label>
                <input type="number" name="lado1" id="lado1" required><br>
                <label for="lado2">Lado 2:</label>
                <input type="number" name="lado2" id="lado2" required><br>
                <label for="lado3">Lado 3:</label>
                <input type="number" name="lado3" id="lado3" required><br>
                <input type="submit" value="Verificar Triângulo">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebendo os valores dos lados do triângulo
                $lado1 = $_POST['lado1'];
                $lado2 = $_POST['lado2'];
                $lado3 = $_POST['lado3'];

                // Validando o tipo de triângulo
                if ($lado1 == $lado2 && $lado2 == $lado3) {
                    $resultado = "equilátero";
                } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                    $resultado = "isósceles";
                } else {
                    $resultado = "escaleno";
                }


                echo "<p>O triângulo, cujos lados medem <b>$lado1</b>, <b>$lado2</b> e <b>$lado3</b>, é um triângulo <b>$resultado</b>.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
