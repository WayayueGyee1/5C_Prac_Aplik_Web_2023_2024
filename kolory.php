<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wynik</title>
    <style>
        <?php

        $tlo = $_POST['tlo'];
        $tekst = $_POST['tekst'];

        if (preg_match('/^#[0-9a-fA-F]{6}$/', $tlo) && preg_match('/^#[0-9a-fA-F]{6}$/', $tekst)) {
            echo "p {
                height: 50%;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
                border: 2px red dashed;
                background-color: $tlo;
                color: $tekst;
            }";
        } else {

            echo "p {
                height: 50%;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
                border: 2px red dashed;
                background-color: #ffffff; /* Domyślny biały kolor tła */
                color: #000000; /* Domyślny czarny kolor tekstu */
            }";
        }
        ?>
    </style>
</head>
<body>
    <p>Twoje imię i nazwisko</p>
</body>
</html>
