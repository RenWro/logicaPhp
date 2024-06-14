<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seven+ - Planos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #11111f;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            border: 1px solid #003049;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        .form-container label {
            display: block;
            margin-top: 10px;
            color: #003049;
        }
        .form-container input, .form-container select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #003049;
            border-radius: 5px;
        }
        .form-container button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #003049;
            color: #fdf0d5;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #d62828;
        }
        hr {
            border: none;
            border-top: 1px solid #003049;
            margin: 10px 0;
        }
        p {
            color: #003049;
            font-size: 1.2em;
            text-align: center;
            margin-top: 0;
        }
        img {
            max-width: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<body>
<img src="img/seven.png" alt="Seven+">
<div class="form-container">
    <form id="planos" method="post" action="planos_process.php">
        <h2>Escolha seu Plano</h2>
        <label>Tipo de Plano</label>
        <select name="tipo_plano" id="tipo_plano" required>
            <option value="Premium 4K + HDR">Premium 4K + HDR - R$ 59,90/mês</option>
            <option value="Padrão 1080p">Padrão 1080p - R$ 44,90/mês</option>
            <option value="Padrão com anúncios 1080p">Padrão com anúncios 1080p - R$ 20,90/mês</option>
        </select>
        <button type="button" onclick="mostrarPagamento()">Escolher Plano</button>
    </form>
    <div id="pagamento" style="display:none;">
        <form id="pagamento_form" method="post" action="planos_process.php" onsubmit="return validarForm()">
            <h2>Dados de Pagamento</h2>
            <input type="hidden" name="tipo_plano" id="plano_escolhido">
            <label>Nome no Cartão</label>
            <input type="text" name="nome_cartao" required>
            <label>Número do Cartão</label>
            <input type="text" name="numero_cartao" placeholder="0000 0000 0000 0000" required>
            <label>Código de Validação</label>
            <input type="text" name="codigo_validacao" required>
            <label>Vencimento</label>
            <input type="text" name="vencimento" placeholder="MM/AA" required>
            <label>CPF</label>
            <input type="text" name="cpf" id="cpf" required>
            <button type="submit">Próxima Etapa</button>
        </form>
    </div>
</div>

<script>
    function mostrarPagamento() {
        var plano = document.getElementById("tipo_plano").value;
        document.getElementById("plano_escolhido").value = plano;
        document.getElementById("pagamento").style.display = "block";
    }

    function validarCPF(cpf) {
        var strCPF = cpf.replace(/[^\d]+/g, '');
        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000") return false;

        for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10))) return false;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(10, 11))) return false;

        return true;
    }

    function validarForm() {
        var cpfInput = document.getElementById("cpf");
        if (!validarCPF(cpfInput.value)) {
            alert("CPF inválido!");
            return false;
        }
        return true;
    }
</script>
</body>
</html>
