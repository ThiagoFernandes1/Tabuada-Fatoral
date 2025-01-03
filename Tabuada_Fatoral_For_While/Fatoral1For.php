<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<head>
    <title>Fatorial</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Digite um número para calcular seu fatorial:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular Fatorial</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST["numero"];
        $fatorial = 1;

        echo "<h2>Fatorial de $numero:</h2>";
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        echo "O fatorial de $numero é: $fatorial";
    }
    ?>
</body>
</html>