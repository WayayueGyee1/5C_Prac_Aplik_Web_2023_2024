<?php
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/');
    echo "Ciasteczko 'username' zostało usunięte.";
} else {
    echo "Ciasteczko 'username' nie istnieje.";
}
?>
