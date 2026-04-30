<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
    $sql->execute([$nome, $email]);

    header("Location: index.php");
}
?>