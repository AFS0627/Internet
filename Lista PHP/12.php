<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Operações com Array</title>
</head>
<body>
    <h2>Informe números separados por vírgula</h2>
    <form method="post">
        <label>Números: <input type="text" name="numeros" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['numeros'];
        $numeros = array_map('intval', explode(',', $input)); // Converte para array de inteiros

        $soma = array_sum($numeros);
        $maior = max($numeros);
        $menor = min($numeros);

        echo "<h3>Resultados:</h3>";
        echo "<p>Soma: $soma</p>";
        echo "<p>Maior número: $maior</p>";
        echo "<p>Menor número: $menor</p>";
    }
    ?>
</body>
</html>
