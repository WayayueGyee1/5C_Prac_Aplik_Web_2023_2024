<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Odloty samolotów</title>


    <link rel="stylesheet" href="style.css"> 
</head>

<body>
    <div class="s1">
        <h2>Odloty z lotniska</h2>
    </div>
    <div class="s2"><img src="logo.png" alt="logotyp"></div>
    <div class="main">
        <table>
            <tr>
                <th>LP.</th>
                <th>Numer Rejsu</th>
                <th>Czas</th>
                <th>Kierunek</th>
                <th>Status</th>
            </tr>
            <?php
            $polaczenie = mysqli_connect(
                'localhost',
                'root',
                '',
                'egzamin'
                );

            $zapytania = ('SELECT id, nr_rejsu, czas, kierunek, status_lotu from odloty ORDER BY czas desc');

            $wynik = mysqli_query($polaczenie, $zapytania);

            while ($row = $wynik->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row['nr_rejsu']."</td><td>".$row['czas']."</td><td>".$row['kierunek']."</td><td>".$row['status_lotu']."</td></tr>";
            }
            ?>
        </table>
    </div>
    <div class="pobierz">
        <a href="samolot.png">Pobierz obraz</a>
    </div>
    <div id="cookie">
        <p>
            <?php
            include ('cookie.php');
            ?>
        </p>
		</div>

	<footer>Autor: Krystian Paluch</footer>
</body>

</html>
















































