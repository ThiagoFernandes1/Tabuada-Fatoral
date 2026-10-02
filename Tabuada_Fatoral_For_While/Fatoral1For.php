<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Fatorial</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Digite um número para calcular seu fatorial:</label>
        <input type="number" name="numero" id="numero" min="0" max="20" required>
        <button type="submit">Calcular Fatorial</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST["numero"];

        // 21! já não cabe em um inteiro de 64 bits
        if ($numero < 0 || $numero > 20) {
            echo "<p>Digite um número entre 0 e 20.</p>";
        } else {
            $fatorial = 1;

            echo "<h2>Fatorial de $numero:</h2>";
            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }
            echo "O fatorial de $numero é: $fatorial";
        }
    }
    ?>
</body>
</html>