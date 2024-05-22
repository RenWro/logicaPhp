<!-- TAG DO CODIGO EM PHP-->
<?php
    //Comentario em Linha
        echo "Olá Mundo!!!";
        /*
        *Comentario
        *Em
        *Bloco
        */
        echo "Ren Wrobleski<br>";
        //Criando variáveis em PHP
        $nome = "Ren Wrobleski";
        //Saída concatenando constante e variável
        echo "Bem-Vindo $nome<br>";
        echo "Bem-Vindo $Nome<br>";
        echo "Bem-Vindo $NOME<br>";
 
        //Outro forma de concatenação
        echo "Bem-Vindo"  . $nome . " ao sistema ";
 
        /*
            Operadores Aritiméticos
 
            Multiplição --->  ( * )
            Divisão ---> ( / )
            Soma ---> ( + )
            Subtração ---> ( - )
            Módulo (Resto da divisão) ---> &
            Exponencial ---> **
        */
        echo "<p>".(3%2)."</p>";
        echo "<p>".(3**2)."</p>";
 
        //Outra forma de impressão em tela
        print "<h1>Eu sou PHP</h1>"
 
        //Podemos usar o PRINT OU ECHO porem como recomendação
        //Ao usar um dos dois, use ele em todo seu projeto ok
        //Boas PRATICAS
 
        /*
            Tipos de variaveis
           
            String - Conjundo de caracteres
            Integer - Números inteiros
            Float - Números flutuantes (fracionados)
            Boolean - Valor lógico
            Array - vetor ou Matriz
            Object - Objeto (CLASSE)
 
            Podendo ser:
 
            Global | LOCAL | Static (constatnte)
        */
?>
 