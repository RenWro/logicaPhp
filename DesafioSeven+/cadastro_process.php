<?php
session_start();

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$confirmar_senha = trim($_POST['confirmar_senha']);

if (empty($nome) || empty($email) || empty($senha) || $senha !== $confirmar_senha) {
    echo "Erro: Todos os campos devem ser preenchidos corretamente e as senhas devem coincidir.";
    exit;
}

$_SESSION['dados'] = [
    'usuario' => [
        'nome' => $nome,
        'email' => $email,
        'senha' => $senha,
    ]
];

header("Location: planos.php");
exit;
?>
