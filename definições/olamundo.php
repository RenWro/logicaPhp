<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha um numero</title>
</head>
<body>
<h2>Calculadora<h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Escolha a operação:<br>
    <input type="radio" name="operacao" value="adicao" checked> Adição<br>
    <input type="radio" name="operacao" value="subtracao"> Subtração<br>
    <input type="radio" name="operacao" value="multiplicacao"> Multiplicação<br>
    <input type="radio" name="operacao" value="divisao"> Divisão<br><br>
    Digite o primeiro número:<br>
    <input type="text" name="num1"><br>
    Digite o segundo número:<br>
    <input type="text" name="num2"><br><br>
    <input type="submit" value="Calculadora">

    </form>
    <?php
        //Criando as funções matemáticas
        //Parametro exemplo "olho seco pisca o olho"
        function adicao($a,$b){
            $resp=$a+$b;
            return$resp;
        }
        function subtracao($a,$b){
            $resp=$a-$b;
            return$resp;
        }
        function multiplicacao($a,$b){
            return $a * $b;
        }
        function divisao($a,$b){
            if($b != 0){
                return $a / $b;
            }else{
                return "ERRO - Divisão por ZERO";
            }
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacao = $_POST["operacao"];

            if((!empty($num1)) && (!empty($num2))){
                switch($operacao){
                    case "adicao":
                        $resp = adicao($num1,$num2);
                        break;
                    case "subtracao":
                        $resp = subtracao($num1,$num2);
                        break;
                    case "multiplicacao":
                        $resp = multiplicacao($num1,$num2);
                        break;
                    case "divisao":
                        $resp = divisao($num1,$num2);
                        break;
                }
            }else{
                $resp = "Por favor, preencha ambos os números";
            }
        }
        echo "<h2>$resp</h2>"
    ?>
</body>
</html>
