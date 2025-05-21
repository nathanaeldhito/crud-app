<?php
$mysqli = new mysqli("db", "root", "root", "crud");

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
?>
