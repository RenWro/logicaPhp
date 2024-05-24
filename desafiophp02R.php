<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Formulário HTML + PHP - Desafio 02</title>
</head>
<body>
    <p>
        Crie um program que após receber o nome, matéria e as notas bimestrais via formulário de html calcula a média
        e informa o resultado "Aprovado" para média >= 7, "Recuperação" para média < 7 e >=5 pi "Reprovado" se média < 5.
        No final, o formulário imprime o nome, a matéria, média e seu resultado.
    </p>
      <h2>
            <font color="#011C40">
                Resultado
            </font>
        </h2>
    <?php

            $nome = $_POST['nome'];
            $materia = $_POST['materia'];
            $b1 = (float)$_POST['b1'];
            $b2 = (float)$_POST['b2'];
            $b3 = (float)$_POST['b3'];
            $b4 = (float)$_POST['b4'];

            $media = ($b1 +$b2 + $b3 + $b4) / 4;

                if ($media >= 7.00) {
                        $resultado = "Aprovado";
                } elseif ($media >= 5 && $media < 7) {
                        $resultado = "Recuperação";
                } else {
                        $resultado = "Reprovado";
                }

                echo "A aluna <b>$nome</b>, que cursou a matéria <b>$materia</b>, obteve a nota <b>$b1</b> no
                primeiro bimestre, a nota <b>$b2</b> no segundo bimestre, a nota <b>$b3</b> no terceiro bimestre e
                a nota <b>$b4</b> no quarto bimestre, obteve média total de <b>$media</b> e está <b>$resultado</b>.";
    ?>

    </body>
</html>