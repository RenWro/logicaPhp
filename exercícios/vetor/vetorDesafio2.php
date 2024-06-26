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
<!--O nth-child é uma ferramenta poderosa no CSS para aplicar estilos com base na posição de um elemento filho dentro
de seu pai. Pode ser usado para selecionar elementos específicos, alternar estilos, criar padrões e muito mais.
odd (ímpares): Seleciona todos os filhos ímpares e even os pares. Tem também 2n que seleciona todos os pares e
an+b: Onde a e b são números inteiros. Seleciona filhos que satisfazem a fórmula.-->

<?php
function validarNota($nota) {
    $nota = str_replace(',', '.', $nota); // Substituir vírgula por ponto
    if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
        return false;
    }
    if (preg_match('/^\d+(\.\d{1,2})?$/', $nota) !== 1) {
        return false;
    }
    return true;
}

function calcularMedia($notas) {
    return round(array_sum($notas) / count($notas), 2);
}

//Colocar  o determinarSituacao dentro de calcularMedia

function determinarSituacao($media) {
    if ($media >= 7) {
        $resp = [
            "Aprovado",
            'https://media.giphy.com/media/jPND4RxDMsgXoZoy3N/giphy.gif'
        ];
        return $resp;
    } elseif ($media >= 5) {
        $resp = [
                "Recuperação",
                'https://i.gifer.com/VHW2.gif'
            ];
            return $resp;
        //return "Recuperação";
    } else {
        $resp = [
                "Reprovado",
                'https://capricho.abril.com.br/wp-content/uploads/2016/08/v8.gif'
            ];
            return $resp;
        //return "Reprovado";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $materia = trim($_POST['materia']);
    $b1 = str_replace(',', '.', trim($_POST['b1']));
    $b2 = str_replace(',', '.', trim($_POST['b2']));
    $b3 = str_replace(',', '.', trim($_POST['b3']));
    $b4 = str_replace(',', '.', trim($_POST['b4']));

    if (empty($nome) || empty($materia) || !validarNota($b1) || !validarNota($b2) || !validarNota($b3) || !validarNota($b4)) {
        echo "Erro: Todos os campos devem ser preenchidos com notas válidas.";
        exit;
    }

    $notas = [$b1, $b2, $b3, $b4];
    $media = calcularMedia($notas);
    $resp = determinarSituacao($media);


    echo "<table>";
    echo "<tr><th>Nome</th><th>Matéria</th><th>Nota 1B</th><th>Nota 2B</th><th>Nota 3B</th><th>Nota 4B</th><th>Média Final</th><th>Situação</th></tr>";
    echo "<tr><td>$nome</td><td>$materia</td><td>$b1</td><td>$b2</td><td>$b3</td><td>$b4</td><td>$media</td><td>$resp[0]</td></tr>";
    echo "</table>";
/*
    if ($resp[0] == "Aprovado") {
        $gifUrl = $resp[1];
    } elseif ($resp[0] == "Recuperação") {
        $gifUrl = $resp[1];
    } else {
        $gifUrl = $resp[1];
    }
*/
    echo "<img src='$resp[1]' alt='Gif de situação'>";

    echo "<a class='back-button' href='vetorDesafio2.html'>Voltar</a>";
}
?>

</body>
</html>
