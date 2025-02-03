<h2>Análise de String</h2>
    <form method="post">
        <label>Digite um texto: <input type="text" name="text" required></label>
        <button type="submit" name="analisar">Analisar</button>
    </form>
    <?php
    if (isset($_POST['analisar'])) {
        $str = $_POST['text'];
        $length = strlen($str);
        $numVowels = preg_match_all('/[aeiouAEIOU]/', $str);
        $numConsonants = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $str);
        $palindrome = isPalindrome($str) ? "Sim" : "Não";
        
        echo "<p>Tamanho da string: $length</p>";
        echo "<p>É um palíndromo? $palindrome</p>";
        echo "<p>Número de vogais: $numVowels</p>";
        echo "<p>Número de consoantes: $numConsonants</p>";
    }
    ?>
</body>
</html>