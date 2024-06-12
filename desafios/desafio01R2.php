<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Crie um program que após receber os dados de um funcionario:
        Nome, RG , CPF , Data de nascimento, Tipo sanguinio e fator RH,
        Cargo, Departamento, Salário Bruto, Horário de entrada, Horário de saida (levando
        e,m consideração que ele tem uma hora de almoço enre as 12h e as 13h);

        calcule:
        Tempo de pemanencia na mepresa em relação ao tempo de sua entrada e saida
        descontando 1h e almoço;
        Armazena as varivaeis staticas com a table do INSS:

    </p>
<?php
        //variaveis para inss %
        $inss1 = 0.075;
        $inss2 = 0.09;
        $inss3 = 0.12;
        $inss4 = 0.14;

        //valor de acordo com a tabela de INSS
        $valinss5 = 1412.00;
        $valinss6 = 2666.68;
        $valinss7 = 2666.68;

        echo "<br>$inss1";
        echo "<br>$inss2";
        echo "<br>$inss3";
        echo "<br>$inss4<hr>";


        $nome = $_POST['nome'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $dn = $_POST['dn'];
        $dp = $_POST['dp'];
        $salb = (float)$_POST['salb'];
        $tipoS = $_POST['tipoS'];
        $horaE = $_POST['horaE'];
        $horaS= $_POST['horaS'];

        $horaEc = substr($horaE, 0,2);
        $minEc = (substr($horaE, 3))/60;
        $horaSc = substr($horaS, 0,2);
        $minSc = (substr($horaS , 3))/60;

        $permHe = ($horaSc + $minSc);
        $permHs = ($horaEc + $minEc);

        $perm = ($permHe - $permHs) - 1.00;

        $minTc = (substr($perm,2));
        $minTc = "0.$minTc";
        $minTc = $minTc*60;

        $horaTc = (substr($perm, 0,1));

        $horaP = $horaTc. ":". $minTc;

        if($salb <= 1412.00){
            $desinss = $salb*$inss1;
        }else if($salb <= 2666.68){
            $desinss = $salb*$inss2;
        }else if($salb <= 4000.03){
            $desinss = $salb*$inss3;
        }else{
            $desinss = $salb*$inss4;
        }

        $salL = $salb - $desinss;

        echo "Nome:$nome<br> RG:$rg<br> CPF:$cpf<br> Data de nascimento:$dn<br> Departamento:$dp<br> Salario Bruto:R$$salb<br> Tipo Sanguinio:$tipoS<br> Permanencia:$perm <br>e seus desconto do INSS:R$$desinss <br>E o salario liquido e:R$$salL";





?>

</body>
</html>
