<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>IMC - Resultado</title>
</head>
<body>
    <h2>Resultado do IMC</h2>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);
        $imc = $peso / ($altura * $altura);
        echo "<p>Nome: $nome</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Peso: {$peso} kg</p>";
        echo "<p>Altura: {$altura} m</p>";
        echo "<p>IMC: " . number_format($imc, 2) . "</p>";
    ?>
</body>
</html>
