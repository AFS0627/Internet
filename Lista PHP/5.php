<?php
function isPalindrome($str) {
    $cleanStr = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
    return $cleanStr === strrev($cleanStr);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferramentas PHP</title>
</head>
<body>
    <h2>Sorteio de Número Aleatório</h2>
    <form method="post">
        <label>Mínimo: <input type="number" name="min" required></label>
        <label>Máximo: <input type="number" name="max" required></label>
        <button type="submit" name="sorteio">Sortear</button>
    </form>
    <?php
    if (isset($_POST['sorteio'])) {
        $min = intval($_POST['min']);
        $max = intval($_POST['max']);
        if ($min < $max) {
            echo "<p>Número sorteado: " . rand($min, $max) . "</p>";
        } else {
            echo "<p>O valor mínimo deve ser menor que o máximo.</p>";
        }
    }
    ?>