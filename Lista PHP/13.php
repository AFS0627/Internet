<?php
session_start();
$usuarioCorreto = "admin";
$senhaCorreta = "aluno";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        $_SESSION["usuario"] = $usuario;
        header("Location: painel.php");
        exit();
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($erro)) echo "<p style='color: red;'>$erro</p>"; ?>
    <form method="post">
        <label>Usuário: <input type="text" name="usuario" required></label><br>
        <label>Senha: <input type="password" name="senha" required></label><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
