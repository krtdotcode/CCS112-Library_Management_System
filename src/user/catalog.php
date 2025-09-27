<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header('Location: ../login.php');
    exit();
}
include '../connect.php';

$sql = "SELECT * FROM books ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User - Book Catalog</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <h2>User: Book Catalog</h2>
    <a href="../logout.php">Logout</a>
    <br><br>
    <form action="#" method="get" style="margin-bottom: 20px;">
        <input type="text" name="q" placeholder="Search by title, author, or year..." required>
        <input type="submit" value="Search">
    </form>
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
                        <?php if ($row['status'] === 'available'): ?>
                            <a href="borrow_book.php?id=<?= $row['id'] ?>">Borrow</a>
                        <?php else: ?>
                            <a href="return_book.php?id=<?= $row['id'] ?>">Return</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="6">No books found.</td></tr>
        <?php endif; ?>
    </table>
    <script src="../login-test.js"></script>
</body>
</html>