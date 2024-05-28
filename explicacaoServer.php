<!-- Informações de server php vem antes do head do HTML como boas práticas -->
<?php
    $servidor = 'http://'.$_SERVER['SERVER_NAME'];
    /*   $servidor: Esta linha está criando uma URL base que inclui o protocolo HTTP e o nome do servidor onde o script
    está sendo executado. $_SERVER['SERVER_NAME'] retorna o nome do domínio (como example.com). Isso é útil para criar
    links absolutos para o mesmo domínio. */

    $urlBase = $_SERVER ['REQUEST_URI'];
    /* $urlBase: Aqui, ele pega o URI da requisição, que inclui o caminho completo da URL após o nome do domínio.
    Por exemplo, se a URL completa é http://example.com/dir/file.php, $_SERVER['REQUEST_URI'] seria /dir/file.php */

    $acao = htmlspecialchars($_SERVER['PHP_SELF']);
    /* $acao: Esta linha usa $_SERVER['PHP_SELF'], que retorna o caminho do arquivo do script em execução relativo à
    raiz do documento. Por exemplo, se o script PHP está localizado em http://example.com/dir/file.php,
    $_SERVER['PHP_SELF'] será /dir/file.php. A função htmlspecialchars é usada para converter caracteres especiais
    em entidades HTML, o que é uma boa prática para evitar ataques de Cross-Site Scripting (XSS) quando esses valores
    são inseridos em HTML. */

    $urlAcao = $servidor.$acao;
    /* $urlAcao: Combina as variáveis $servidor e $acao para formar uma URL completa até o script PHP em execução.
    Isso é útil se você precisar de um link absoluto para o próprio script. */

    //Verificar se o formulário foi submetido

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //Obter o palpite do jogador via formulário

        $palpite = $_POST['palpite'];

        //Verificar se o jogador passou o valor entre 0 e 10

            if(($palpite !== null) && ($palpite >= 0 ) && ($palpite <= 10)) {
                $valSorteado = rand(0,10);

                //Comparar o palpite com o número sorteado usando uma estrutura switch

                switch(TRUE){
                    case $palpite < $valSorteado:
                    $resp = "Muito baixo! <br> Tente outra vez!";
                    break;

                    case $palpite > $valSorteado:
                    $resp = "Muito alto! <br> Tente outra vez!";
                    break;

                    default:
                    $resp = "Parabéns! <br> Jogue outra vez!";
                }
            }else{
                $resp = "valor Errado";
            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de adivinhação</title>
</head>
<body>
<h1>Jogo de adivinhação</h1>
<p>Tente adivinhar um número entre 0 e 10!</p>
<form method="post" action="<?=$urlAcao?>"> <!--<?=$urlAcao?> -->
    <label>Seu palpite: </label>
    <input type="number" name="palpite" id="palpite" required>
    <input type="submit" value = "Enviar palpite">
</form>
<h2>
    <?php
    echo $resp;
/*
    echo "Endereço do servidor PHP $servidor<br>";
    echo "Endereço de url pasta mais arquivo $urlBase<br>";
    echo "Endereço de url pasta mais arquivo $acao<br>";
    echo "URL completa $urlAcao<br>";

    // Este é um comentário de linha única usando duas barras.
    # Este é um comentário de linha única usando o símbolo de sustenido.
    * Este é um comentário de múltiplas linhas.
    Você pode escrever vários textos aqui,
    e eles serão todos considerados comentários.
    Útil para desativar blocos de código ou para comentários longos. */
    ?>
</h2>
</body>
</html>