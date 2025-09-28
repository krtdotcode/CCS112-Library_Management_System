<?php
include '../connect.php';

$query = '';
if (isset($_GET['q'])) {
    $query = $conn->real_escape_string($_GET['q']);
    $sql = "SELECT * FROM books WHERE title LIKE '%$query%' OR author LIKE '%$query%' OR year_published LIKE '%$query%' ORDER BY id DESC";
    $result = $conn->query($sql);
} else {
    $result = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Search Results</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <h2>Admin: Search Results</h2>
    <form action="search.php" method="get">
        <input type="text" name="q" value="<?= htmlspecialchars($query) ?>" placeholder="Search by title, author, or year..." required>
        <input type="submit" value="Search">
    </form>
    <br>
    <a href="books.php">Back to Book List</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year Published</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                    <td><?= htmlspecialchars($row['author']) ?></td>
                    <td><?= $row['year_published'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td>
                        <a href="edit_book.php?id=<?= $row['id'] ?>">Edit</a> |
                        <a href="delete_book.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this book?');">Delete</a> |
                        <?php if ($row['status'] === 'available'): ?>
                            <a href="borrow_book.php?id=<?= $row['id'] ?>">Borrow</a>
                        <?php else: ?>
                            <a href="return_book.php?id=<?= $row['id'] ?>">Return</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php elseif ($result): ?>
            <tr><td colspan="6">No books found.</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
