<?php
session_start();

if(ifsset($_SESSION['user_id'])) {
    header("Location: menu.php");
    exit();
}

include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
}
?>

<!-- Formularz logowania --> 
<form method="post" action="login.php">
    Login: <input type="text" name="login"><br>
    Hasło: <input type="password" name-"password"><br>
<input type="submit" value="Zaloguj">
</form>