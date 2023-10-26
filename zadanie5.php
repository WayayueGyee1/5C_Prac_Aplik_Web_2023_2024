<?php

if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1; 
} else {
    $visits = 1;
}
setcookie('visits', $visits, time() + 86400 * 30, '/'); 
if ($visits >= 10) {
    echo "Gratulacje! Osiągnąłeś 10 odwiedzin tej strony.";
} else {
    echo "To jest twoja $visits wizyta na tej stronie.";
}
?>
