<?php
$newUsername = "Nowa Wartość Imienia i Nazwiska";
setcookie("username", $newUsername, time() + 3600, "/");

echo "Wartość ciasteczka 'username' została zaktualizowana na: " . $newUsername;
?>
