<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>
<body>
    <h1>Estruturas de Repetição</h1>
    <h2>PARA<h2>
        <?php
            for($i=0; $i<11;$i++){
                echo $i."<br>";
        }
        #O incremento, ou o "++" o incremento ou decremento apos a variável, retorna a variável antes de alterar o
        #valor, já antes da variável, faz a alteração e depois retorna. Trata-se dos conceitos de pré e pós incremento.
        #E por isso ele "para" a variável
    echo "após o loop, o valor de i é $i."
        ?>
    <hr>
    <h2>ENQUANTO<h2>
        <?php
            $m = 0;
            while($m<11){
                echo $m."<br>";
                $m++;
            }
        echo "após o loop, o valor de m é $m."
        ?>
    <hr>
       <h2>REPITA<h2>
            <?php
            $z = 0;
            do{
                echo $z."<br>";
                $z++;
            }while ($z < 11);
        echo "após o loop o valor de z é $z."
            ?>
        <hr>
</body>
</html>


