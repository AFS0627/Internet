<h2>Verificação de Par ou Ímpar</h2>
    <form method="post">
        <label>Digite um número: <input type="number" name="num" required></label>
        <button type="submit" name="verificar">Verificar</button>
    </form>
    <?php
    if (isset($_POST['verificar'])) {
        $num = intval($_POST['num']);
        echo "<p>Número informado: $num - " . (($num % 2 == 0) ? "Par" : "Ímpar") . "</p>";
    }
    ?>