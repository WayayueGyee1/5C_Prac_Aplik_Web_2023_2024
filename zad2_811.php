<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator pierwiastka kwadratowego</title>
</head>
<body>

<h1>Kalkulator pierwiastka kwadratowego</h1>

<form action="" method="post">
    Podaj liczbę: <input type="text" name="liczba">
    <input type="submit" value="Oblicz">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczba = $_POST["liczba"];
    if ($liczba >= 0) {
        $pierwiastek = sqrt($liczba);
        echo "Pierwiastek kwadratowy z $liczba to: $pierwiastek";
    } else {
        echo "Nie można obliczyć pierwiastka kwadratowego z liczby ujemnej.";
    }
}
?>

</body>
</html>