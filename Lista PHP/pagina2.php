<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>IMC - Página 2</title>
</head>
<body>
    <h2>Informe seu peso e altura</h2>
    <form action="pagina3.php" method="post">
        <input type="hidden" name="nome" value="<?php echo $_GET['nome']; ?>">
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
        <label>Peso (kg): <input type="number" name="peso" step="0.01" required></label><br>
        <label>Altura (m): <input type="number" name="altura" step="0.01" required></label><br>
        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>
