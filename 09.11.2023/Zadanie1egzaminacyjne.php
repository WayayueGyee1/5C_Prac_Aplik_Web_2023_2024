<!DOCTYPE html>
<html>
<head>
    <title>Suma 100 kolejnych liczb parzystych</title>
</head>
<body>
    <h1>Suma 100 kolejnych liczb parzystych</h1>

    <?php
        $suma = 0;
        $liczba = 100;

        for ($i = 0; $i < 100; $i++) {
            $suma += $liczba;
            $liczba += 2;
        }

        echo "Suma 100 kolejnych liczb parzystych zaczynając od 100 wynosi: $suma";
    ?>
</body>
</html>