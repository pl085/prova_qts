<?php

session_start();
include("seguranca.php");

include("conexao.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Painel administrativo</title>
</head>
<body>
    <?php
    echo "Seja bem vindo(a)" . $_SESSION['nome'];
    ?>
    <a href="sair.php">Sair</a>
<h1>Crud de usuários</h1>
    <form action="inserir.php" method = "post">
        <input type="text" placeholder="Digite o nome" name="nome">
    <input type="email" name="login" placeholder="Digite seu email">
    <input type="password" name="senha" placeholder="Digite sua senha">
    <select name="acesso_nivel">
        <option value="admin">Administrador</option>
        <option value="colaborador">Colaborador</option>
    </select>
    <input type="submit" value="Cadastrar">
    </form>
    <h1>Listar usuários</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Nível de acesso</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($linha = mysqli_fetch_assoc($resultado)){
             ?>   
            <tr>
                <td><?php echo $linha['id'] ?></td>
                <td><?php echo $linha['nome'] ?></td>
                <td><?php echo $linha['login'] ?></td>
                <td><?php echo $linha['senha'] ?></td>
                <td><?php echo $linha['nivel_acesso'] ?></td>
                <td>
                    <button>Atualizar</button>
                    <a href="deletar.php?id=<?php echo $linha ['id'] ?>">
                    <button>Deletar</button>    
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
