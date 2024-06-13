<?php
session_start();

$generos = isset($_POST['generos']) ? implode(", ", $_POST['generos']) : "";

$_SESSION['dados']['perfil'] = [
    'generos' => $generos
];

header("Location: matrizInfosFinal.php");
exit;
?>
