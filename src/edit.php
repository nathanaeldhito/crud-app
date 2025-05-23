<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM books WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $conn->query("UPDATE books SET title='$title', author='$author' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Edit Book</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($row['title']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Author:</label>
            <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($row['author']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
