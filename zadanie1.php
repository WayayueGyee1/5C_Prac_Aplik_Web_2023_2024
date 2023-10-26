<?php
$imie_i_nazwisko = "Krystian Paluch";
setcookie("username", $imie_i_nazwisko, time() + 3600, "/");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ustawianie ciasteczka</title>
</head>
<body>
    <p>Ciasteczko "username" zostało ustawione.</p>
</body>
</html>
