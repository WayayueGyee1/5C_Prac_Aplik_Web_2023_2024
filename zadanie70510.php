<!DOCTYPE html>
<html>
<head>
    <title>Sumowanie liczb nieparzystych</title>
</head>
<body>
    <form method="post" action="">
        <label for="x">Podaj wartość x:</label>
        <input type="number" name="x" id="x" required>
        <br>
        <label for="y">Podaj wartość y:</label>
        <input type="number" name="y" id="y" required>
        <br>
        <input type="submit" value="Sumuj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];
        $sum = 0;

        echo "<h3>Suma liczb nieparzystych od $x do $y:</h3>";

       
        if ($x % 2 == 0) {
            $x++;
        }

    
        for ($i = $x; $i <= $y; $i += 2) {
            $sum += $i;
        }

        echo "Suma wynosi: $sum";
    }
    ?>
</body>
</html>
