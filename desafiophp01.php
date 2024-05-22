<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Crie um programa que, após receber os dados de um funcionário:
        Nome, RG, CPF, Data de nascimento, Tipo sanguíneo e fator RH,
        Cargo, Departamento, Salário Bruto, Horário de entrada, Horário de saída (levando
        em consideração que ele tem uma hora de almoço entre as 12h e as 13h);

        calcule:
        Tempo de permanência na empresa em relação ao tempo de sua entrada e saída
        descontando 1h de almoço;
        Armazene as variáveis estáticas com a tabela do INSS:
                   até R$1.412,00 - 7,5%
                   até R$2.666,68 - 9%
                   até R$4.000,00 - 12%
                   até R$7.786,02 - 14%

    </p>
<?php
    $nome = "Ren Wrobleski";
    $rg = "43451579";
    $cpf = "334.620.658-07";
    $data = "06/09/1984";
    $tipo = "O";
    $fator = "negativo";
    $cargo = "Analista";
    $dpto = "TI";
    $bruto = 3000.00;
    $entrada = 8;
    $saida = 17;
    $horario = $entrada - $saida;
      if ($bruto <= 1412.00) {
          $faixa_salarial = "até R$1.412,00";
          $imposto_percentual = 0.075;
      } elseif ($bruto <= 2666.68) {
          $faixa_salarial = "até R$2.666,68";
          $imposto_percentual = 0.09;
      } elseif ($bruto <= 4000.00) {
          $faixa_salarial = "até R$4.000,00";
          $imposto_percentual = 0.12;
      } else {
          $faixa_salarial = "até R$7.786,02";
          $imposto_percentual = 0.14;
      }
      $imposto = $bruto * $imposto_percentual;
      $liquido = $bruto - $imposto;
    $liquido = $bruto - $imposto;

     echo "A funcionária $nome, RG número $rg, CPF número $cpf, data de nascimento $data,
        tipo sanguíneo $tipo, e fator RH $fator, que ocupa a posição $cargo no departamento $dpto,
        cujo salário bruto é R$ $bruto, enquadrando-se na faixa salarial $faixa_salarial, pagando
        um imposto de R$ $imposto (correspondente a $imposto_percentual% do salário bruto) e o
        salário líquido que recebe é R$ $liquido.";


?>

</body>
</html>