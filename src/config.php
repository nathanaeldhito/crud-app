<?php
$host = 'db';
$user = 'root';
$pass = 'password';
$dbname = 'bookdb';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
