<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio Vetores e Matrizes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf0d5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #003049;
        }
        th {
            background-color: #003049;
            color: #fdf0d5;
            padding: 10px;
            text-align: center;
        }
        td {
            padding: 10px;
            text-align: center;
            color: #003049;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        img {
            margin-top: 20px;
        }
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #003049;
            color: #fdf0d5;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: #d62828;
        }
    </style>
</head>
<body>

<?php
function validarNota($nota) {
    if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
        return false;
    }
    return true;
}

function calcularMedia($notas) {
    return round(array_sum($notas) / count($notas), 2);
}

function determinarSituacao($media) {
    if ($media >= 7) {
        return "Aprovado";
    } elseif ($media >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $materia = trim($_POST['materia']);
    $b1 = trim($_POST['b1']);
    $b2 = trim($_POST['b2']);
    $b3 = trim($_POST['b3']);
    $b4 = trim($_POST['b4']);

    if (empty($nome) || empty($materia) || !validarNota($b1) || !validarNota($b2) || !validarNota($b3) || !validarNota($b4)) {
        echo "Erro: Todos os campos devem ser preenchidos com notas válidas.";
        exit;
    }

    $notas = [$b1, $b2, $b3, $b4];
    $media = calcularMedia($notas);
    $situacao = determinarSituacao($media);

    echo "<table>";
    echo "<tr><th>Nome</th><th>Matéria</th><th>Nota 1B</th><th>Nota 2B</th><th>Nota 3B</th><th>Nota 4B</th><th>Média Final</th><th>Situação</th></tr>";
    echo "<tr><td>$nome</td><td>$materia</td><td>$b1</td><td>$b2</td><td>$b3</td><td>$b4</td><td>$media</td><td>$situacao</td></tr>";
    echo "</table>";

    echo "<img src='https://media.giphy.com/media/jPND4RxDMsgXoZoy3N/giphy.gif' alt='Gif de comemoração'>";

    echo "<a class='back-button' href='vetorDesafio.html'>Voltar</a>";
}
?>

</body>
</html>
