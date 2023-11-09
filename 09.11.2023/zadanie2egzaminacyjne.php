<!DOCTYPE html>
<html>
<head>
    <title>Obliczanie sumy kolejnych liczb naturalnych</title>
</head>
<body>
    <h1>Obliczanie sumy kolejnych liczb naturalnych</h1>

    <?php
        $suma = 0;
        $liczba = 10;

        while ($suma <= 1000) {
            $suma += $liczba;
            $liczba++;
        }

        echo "Suma kolejnych liczb naturalnych, zaczynając od 10, która przekracza 1000 wynosi: $suma";
    ?>
</body>
</html>