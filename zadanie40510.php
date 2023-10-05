<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź, czy liczba jest liczbą pierwszą</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Podaj liczbę:</label>
        <input type="number" name="number" id="number" required>
        <br>
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (isPrime($number)) {
            echo "<h3>$number jest liczbą pierwszą.</h3>";
        } else {
            echo "<h3>$number nie jest liczbą pierwszą.</h3>";
        }
    }

    function isPrime($n) {
        if ($n <= 1) {
            return false;
        }
        if ($n <= 3) {
            return true;
        }
        if ($n % 2 == 0 || $n % 3 == 0) {
            return false;
        }
        for ($i = 5; $i * $i <= $n; $i += 6) {
            if ($n % $i == 0 || $n % ($i + 2) == 0) {
                return false;
            }
        }
        return true;
    }
    ?>
</body>
</html>
