<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <h1>Trabalhando com Matrizes</h1>
    <?php
    //matriz tridimensional
        $matriz = array(
            ["0,1","0,2","0,3","0,4"],
            ["1,1","1,2","1,3","1,4"]
        );

        echo $matriz[0][1];
        echo "<hr>";

        $agenda = [
                'Vitor' =>[
                        'telefone' => ['11 - 00000-0000', '11 - 00000-0000'],
                        'email' => ['vitor.avalles@senacsp.edu.br","vitorvalles25@gmail.com'],
                        'data-nascimento ' => ['00/00/0000']
                ],
                'fulano' =>[
                        'telefone' => ['11 - 00000-0000", "11 - 00000-0000'],
                        'email' => ['fulano.fulano@senacsp.edu.br","fulano25@gmail.com'],
                        'data-nascimento' => ['00/00/0000']
                ],
                'ciclano' =>[
                    'telefone' => ['11 - 00000-0000", "11 - 00000-0000'],
                    'email' => ['ciclano.ciclano@senacsp.edu.br','ciclano25@gmail.com'],
                    'data-nascimento' => ['00/00/0000']
            ]
            ];

            echo $agenda['fulano']['data-nascimento'][0];
            echo "<hr>";
            echo $agenda['ciclano']['email'][0];
            echo "<hr>";

            //se tirar os colchetes volta a ser bidimencional

            $agenda2 =[
                'Nerildin' =>[
                    'telefone' => [
                        'whatsapp' => ["11 - 97979-9524", "11 98989-9999"],
                        "fixo" => "11 3294-3425",
                       ]
                    'email' => 'vitor.avalles@senacsp.edu.br',
                    'data-nascimento' => '00/00/0000'
            ],
        ];

        echo $agenda2['Nerildin']['email']["whatsapp"][1]; //Com $ chama a variável global, com [""] chama a variável local da matriz
        echo "<br>";
        echo $agenda2['Nerildin']["telefone"]["fixo"];
        echo "<h2>";


        //outra forma de criar
        //as linhas tem que ter nome unico ja as linhas podem ter nomes iguais
        $matriz2 = array(
            array("a0","b1","c2"),
            array("d0","e1","f2")
        );
        echo $matriz2[1][2];
        echo "<hr>";

        //matriz tridimencional
        $matriz3 =[
            [
                [
                    "0",1
                ],//coluna0
                [2],//coluna1
                [3,4],//coluna2
            ]//linha 0
        ];

        echo $matriz3[0][2][1];

    ?>

</body>
</html>
