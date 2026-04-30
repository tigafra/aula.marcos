<?php
$host = 'localhost';
$db   = 'aula_crud';
$user = 'root';
$pass = ''; // Altere se o seu XAMPP/WAMP tiver senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>