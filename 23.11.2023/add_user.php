<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include('db_connect.php')

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    header("Location: menu.php");
    exit();
}
?>

<!-- Formularz dodawania uzytkownika --> 
<form method="post" action="add_user.php">
    <!-- Pola Formularza -->
    <input type="submit" value="Dodaj użytkownica">
</form>