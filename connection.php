<?php
$host = "localhost:3306";
$username = "kwamecasey_hk2aftfsp8a"; // Replace with your MySQL username
$password = "nKb3Z0Lp9$"; // Replace with your MySQL password
$database_name = "kwamecasey";

$database = new mysqli($host, $username, $password, $database_name);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
?>
