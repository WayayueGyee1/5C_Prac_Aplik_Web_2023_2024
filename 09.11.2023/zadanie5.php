<!DOCTYPE html>
<html>
<head>
    <title>Znalezienie miejsca zerowego funkcji</title>
</head>
<body>
    <h1>Znalezienie miejsca zerowego funkcji</h1>

    <?php

        $funkcja = "x*x - 16"; 
        $poczatek_przedzialu = 1;
        $koniec_przedzialu = 10;
        $dokladnosc = 0.0001;

  
        function znajdz_miejsce_zerowe($funkcja, $poczatek_przedzialu, $koniec_przedzialu, $dokladnosc) {
            $a = $poczatek_przedzialu;
            $b = $koniec_przedzialu;

            while (($b - $a) >= $dokladnosc) {
                $c = ($a + $b) / 2;
                $fc = eval(str_replace('x', $c, $funkcja));
                if ($fc == 0.0) {
                    break;
                } elseif ($fc * eval(str_replace('x', $a, $funkcja)) < 0) {
                    $b = $c;
                } else {
                    $a = $c;
                }
            }

            return $c;
        }

        
        $wynik = znajdz_miejsce_zerowe($funkcja, $poczatek_przedzialu, $koniec_przedzialu, $dokladnosc);
        echo "Miejsce zerowe funkcji x^2 - 16 wynosi: $wynik";
    ?>
</body>
</html>