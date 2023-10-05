<!DOCTYPE html>
<html>
<head>
    <title>Generowanie tabeli HTML</title>
</head>
<body>
    <form method="post" action="">
        <label for="rows">Liczba wierszy:</label>
        <input type="number" name="rows" id="rows" required>
        <br>
        <label for="cols">Liczba kolumn:</label>
        <input type="number" name="cols" id="cols" required>
        <br>
        <input type="submit" value="Generuj tabelę">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];
        $cols = $_POST["cols"];

        
        echo "<table border='1'>\n";

       
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";

           
            for ($j = 1; $j <= $cols; $j++) {
                echo "<td>Wiersz $i Kolumna $j</td>";
            }

            echo "</tr>\n";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
