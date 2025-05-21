<?php
$host = 'db'; // Nama container database
$user = 'cruduser';
$pass = 'crudpassword';
$dbname = 'crud_db';

// Buat koneksi
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>