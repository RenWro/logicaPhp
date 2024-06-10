<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor e Matriz</title>
</head>
<body>
    <?php
        //Criando Vetor Unilateral
        $vetor1 = array(
            "Vitor",
            "10/012/2005",
            44,
            "11 00000-0000",
            true
        );
        echo $vetor1[2]."<hr>";

        $vetor2 = [
            "TII-07",
            "Lab-31",
            "Manhã",
            true
        ];

        echo $vetor2[3]."<hr>";

        $vetor3 = array(
            "nome"=>"Ren",
            "data nascimento"=>"06/09/1984",
            "idade"=>39,
            "whatsapp"=>"11 91874-6249",
            "ativo"=>true
        );

        echo $vetor3["whatsapp"] ."<hr>";

        foreach($vetor3 as $chave => $valor){
            echo "{$chave}:{$valor}<br>";
        }
        echo "<br>";

        // Tipos de impressão para Vetor //

        // Imprime todas os dados de Vetor.
        // Imprime os tipos de imformações e quantidade de caracter usado.
        var_dump($vetor3);
        echo "<hr>";

        // Imprime todo o Vetor de uma só vez.
        print_r($vetor3);
        echo "<hr>";

        // Remove o primeiro item do Vetor "array_shift"
        array_shift($vetor3);
        print_r($vetor3);
        echo "<hr>";

        // Remove o último item do Vetor.
        array_pop($vetor3);
        print_r($vetor3);
        echo "<hr>";

        //Organizar de ordem crescente o vetor
        $vetor4 = ["Fusca", "Brasilia", "Variant". "Cadette"];
        sort($vetor4);
        print_r($vetor4);
        echo "<hr>";

        //Organizar de ordem decrescente o vetor
        rsort($vetor4);
        print_r($vetor4);
        echo "<hr>";

        // Organiza em ordem crecente o veto com parâmetro de acordo como valor
        asort($vetor3);
        print_r($vetor3);
        echo "<hr>";
 
        // Organiza em ordem decrescente o vetor com parâmetro com parâmetro de acordo com a chave
        arsort($vetor3);
        print_r($vetor3);
        echo "<hr>"
 
        // Organiza em Ordem Crescente o vetor com Paramêtro de acordo com a Chave.
        ksort($vetor3);
        print_r($vetor3);
        echo "<hr>";
 
        // Organiza em Ordem Decrescente o vetor com Paramêtro de acordo com a Chave.
        krsort($vetor3);
        print_r($vetor3);
        echo "<hr>";
 
        // Remover Elementos repetidos
        $vetor5 = [3,4,5,6,7,8,9,3,5,2];
        $vetor5 = array_unique($vetor5);
        print_r($vetor5);
        echo "<hr>";

        // Remover Elementos repetidos
        foreach ($vetor4 as $carros){
            echo "$carros <br>";
        }

        echo count ($vetor4);
        echo "<hr>";

        for (i=0; i<count($vetor4); $i++){
            echo "$carros <br>";
        }
        echo "<hr>";
 
tem menu de contexto
Redigir
        
    ?>

</body>
</html>