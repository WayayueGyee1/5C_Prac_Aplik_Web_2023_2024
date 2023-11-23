<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nazwa_bazy_danych"

$conn = new msqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>