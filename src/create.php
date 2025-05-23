<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $conn->query("INSERT INTO books (title, author) VALUES ('$title', '$author')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Add New Book</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Author:</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
