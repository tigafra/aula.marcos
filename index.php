<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP - Aula 16/04</title>
</head>
<body>
    <h2>Novo Usuário</h2>
    <form action="create.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Adicionar</button>
    </form>

    <hr>

    <h2>Usuários Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php
        $sql = $pdo->query("SELECT * FROM usuarios");
        while ($row = $sql->fetch()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Editar</a> | 
                    <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Deseja excluir?')\">Excluir</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>