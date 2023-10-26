<?php
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "Wartość ciasteczka 'username' to: " . $username;
} else {
    echo "Ciasteczko 'username' nie jest ustawione.";
}
?>