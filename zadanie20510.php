<!DOCTYPE html>
<html>
<head>
    <title>Zwiększanie i zmniejszanie zmiennej</title>
</head>
<body>
    <form method="post" action="">
        <label for="x">Podaj wartość x:</label>
        <input type="number" name="x" id="x" required>
        <br>
        <label for="y">Podaj wartość y:</label>
        <input type="number" name="y" id="y" required>
        <br>
        <input type="submit" value="Wykonaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];
        $i = $x;

        echo "<h3>Wykorzystanie pętli 'for':</h3>";
        for (; $i <= $y; $i += 2) {
            echo "Wartość i: $i<br>";
        }
        
        echo "<h3>Wykorzystanie pętli 'while':</h3>";
        $i = $x;
        while ($i <= $y) {
            echo "Wartość i: $i<br>";
            $i += 2;
        }

        echo "<h3>Wykorzystanie pętli 'do...while':</h3>";
        $i = $x;
        do {
            echo "Wartość i: $i<br>";
            $i += 2;
        } while ($i <= $y);

        echo "<h3>Zmniejszanie i:</h3>";
        $i = $y;
        while ($i >= 1) {
            echo "Wartość i: $i<br>";
            $i -= 4;
        }
    }
    ?>
</body>
</html>
