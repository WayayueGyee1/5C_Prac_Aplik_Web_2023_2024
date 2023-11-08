<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator wartości bezwzględnej</title>
</head>
<body>

<h1>Kalkulator wartości bezwzględnej</h1>

<form action="" method="post">
    Podaj liczbę: <input type="text" name="liczba">
    <input type="submit" value="Oblicz">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczba = $_POST["liczba"];
    $bezwzgledna = abs($liczba);
    echo "Wartość bezwzględna z $liczba to: $bezwzgledna";
}
?>

</body>
</html>