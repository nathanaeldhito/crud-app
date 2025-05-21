<?php
include "db.php";
$id = $_GET['id'];
$mysqli->query("DELETE FROM users WHERE id=$id");
header("Location: index.php");
?>
