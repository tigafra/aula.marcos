<?php
include 'db.php';

$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$sql->execute([$id]);
$usuario = $sql->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $update = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
    $update->execute([$nome, $email, $id]);
    header("Location: index.php");
}
?>

<form method="POST">
    <input type="text" name="nome" value="<?= $usuario['nome'] ?>">
    <input type="email" name="email" value="<?= $usuario['email'] ?>">
    <button type="submit">Atualizar</button>
</form>