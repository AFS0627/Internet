<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Intervalo Numérico</title>
    <style>
        .numero { font-size: 18px; font-weight: bold; color: blue; margin: 5px; }
    </style>
</head>
<body>
    <h2>Informe um intervalo</h2>
    <form method="post">
        <label>Início: <input type="number" name="inicio" required></label><br>
        <label>Fim: <input type="number" name="fim" required></label><br>
        <button type="submit">Exibir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = intval($_POST['inicio']);
        $fim = intval($_POST['fim']);
        echo "<h3>Números no intervalo:</h3>";
        for ($i = $inicio; $i <= $fim; $i++) {
            echo "<span class='numero'>$i</span> ";
        }
    }
    ?>
</body>
</html>
