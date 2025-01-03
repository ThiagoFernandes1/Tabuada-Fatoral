<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Digite um número para ver sua tabuada:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Ver Tabuada</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST["numero"];

        echo "<h2>Tabuada de $numero:</h2>";
        $i = 1;
        while ($i <= 10) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
            $i++;
        }
    }
    ?>
</body>
</html>