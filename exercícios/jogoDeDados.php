<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Dados</title>
    <style>
        body {
            background-color: #F2EED8; /* Cor de fundo do corpo */
            font-family: 'Helvetica', sans-serif; /* Tipo de fonte para todo o corpo */
            text-align: center; /* Alinha todo o texto ao centro */
        }
        h1 {
            color: #011C40; /* Cor do texto para o título h1 */
            font-weight: bold; /* Torna o texto em negrito */
        }
        img {
            display: block; /* Torna a imagem um bloco para aplicar margens */
            margin: auto; /* Centraliza a imagem horizontalmente */
        }
        form {
            margin: 20px auto; /* Centraliza o formulário na página */
            width: fit-content; /* Ajusta a largura do formulário ao seu conteúdo */
        }
        input[type="submit"] {
            background-color: #2d4ce3; /* Cor de fundo do botão */
            color: #011C40; /* Cor do texto do botão */
            font-family: 'Helvetica', sans-serif; /* Tipo de fonte do botão */
            padding: 6px 10px; /* Adiciona preenchimento ao botão */
            cursor: pointer; /* Muda o cursor para indicar que é clicável */
            border: none; /* Remove a borda padrão */
        }
        input[type="submit"]:hover {
            background-color: #e03528; /* Cor de fundo do botão ao passar o mouse */
        }
    </style>
</head>
<body>
    <h1>Jogo de Dados</h1>
    <img src="https://media2.giphy.com/media/1tLvBEzx2k16wMBL8H/200w.gif?cid=6c09b9529zmtit8m75wdbfrpt6i4qd8lgkxz76l2fdtkfhkm&ep=v1_gifs_search&rid=200w.gif&ct=g" alt="Dadinhos">
    <?php
    // Jogue o dado
    $dado = rand(1,6);
    echo "<p>Resultado do dado: " . $dado . "</p>";

    switch($dado){
        case 1:
            echo "Avance 1 casa";
            break;
        case 2:
            echo "Jogue novamente";
            break;
        case 3:
            echo "Você perdeu a vez";
            break;
        case 4:
            echo "Bônus: você pode avançar";
            break;
        default:
            echo "Nenhuma ação especial";
            break;
    }
    ?>
    <form method="post">
        <input type="submit" value="Girar o Dado Novamente">
    </form>
</body>
</html>
