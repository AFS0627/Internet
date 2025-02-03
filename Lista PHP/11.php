<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Classificação de Triângulo</title>
</head>
<body>
    <h2>Informe os lados do triângulo</h2>
    <form method="post">
        <label>Lado 1: <input type="number" name="lado1" required></label><br>
        <label>Lado 2: <input type="number" name="lado2" required></label><br>
        <label>Lado 3: <input type="number" name="lado3" required></label><br>
        <button type="submit">Classificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = intval($_POST['lado1']);
        $b = intval($_POST['lado2']);
        $c = intval($_POST['lado3']);

        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            if ($a == $b && $b == $c) {
                $tipo = "Equilátero (todos os lados iguais)";
            } elseif ($a == $b || $a == $c || $b == $c) {
                $tipo = "Isósceles (dois lados iguais)";
            } else {
                $tipo = "Escaleno (todos os lados diferentes)";
            }
            echo "<p>O triângulo é: <strong>$tipo</strong></p>";
        } else {
            echo "<p>Os valores informados não formam um triângulo válido.</p>";
        }
    }
    ?>
</body>
</html>
