<?php
include 'db.php';
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
$sql->execute([$id]);
header("Location: index.php");
?>