<?php
include 'config.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Query untuk menghapus data
$result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

// Redirect ke halaman index
header("Location: index.php");
?>