<?php
if (isset($_COOKIE['visit_count'])) {
    $visitCount = intval($_COOKIE['visit_count']) + 1;
} else {
    $visitCount = 1;
}


setcookie('visit_count', $visitCount, time() + 3600 * 24, '/'); 
echo "Liczba odwiedzin: $visitCount";
?>
