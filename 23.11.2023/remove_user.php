<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    header("Location: menu.php");
    exit();
}
?>

<form method="post" action="remove_user.php">

    <input type="submit" value="Usuń użytkownika">
</form>