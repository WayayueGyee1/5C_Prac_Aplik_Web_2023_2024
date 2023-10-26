<?php

function isBirthday($birthday) {
    $today = date('Y-m-d');
    return $today == $birthday;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    if (isset($_POST['birthdate'])) {
        $birthdate = $_POST['birthdate'];

        
        setcookie('birthday', $birthdate, time() + 86400 * 365, '/'); 
    }
}

if (isset($_COOKIE['birthday'])) {
    $birthday = $_COOKIE['birthday'];

    if (isBirthday($birthday)) {
        echo "Wszystkiego najlepszego z okazji urodzin! 🎉";
    } else {
        echo "Twoje urodziny są " . date('j F', strtotime($birthday)) . ". Odwiedź nas w dniu urodzin, aby otrzymać życzenia!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Życzenia urodzinowe</title>
</head>
<body>
    <form method="POST">
        Podaj datę urodzin: <input type="date" name="birthdate">
        <input type="submit" value="Zapisz">
    </form>
</body>
</html>
