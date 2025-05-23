<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Book List</h2>
        <a href="create.php" class="btn btn-primary">Add Book</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr><th>ID</th><th>Title</th><th>Author</th><th>Actions</th></tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM books");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['author']) ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
