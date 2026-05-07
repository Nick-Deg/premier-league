<?php
$host = "localhost";
$dbName = "premierleague";
$dbUser = "root";
$dbPass = "root";

$conn = new mysqli($host, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Database connectie mislukt: " . $conn->connect_error);
}
?>
