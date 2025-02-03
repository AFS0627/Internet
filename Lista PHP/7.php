<h2>Tabuada</h2>
    <form method="post">
        <label>Digite um número: <input type="number" name="tabuada" required></label>
        <button type="submit" name="gerarTabuada">Gerar Tabuada</button>
    </form>
    <?php
    if (isset($_POST['gerarTabuada'])) {
        $num = intval($_POST['tabuada']);
        echo "<h3>Tabuada do $num:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$num x $i = " . ($num * $i) . "<br>";
        }
    }
    ?>