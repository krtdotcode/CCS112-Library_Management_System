<?php
include '../connect.php';

if (!isset($_GET['id'])) {
    header('Location: books.php');
    exit();
}

$id = (int)$_GET['id'];
$sql = "SELECT * FROM books WHERE id = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    echo '<p>Book not found.</p>';
    echo '<a href="books.php">Back to Book List</a>';
    exit();
}

$book = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book (Admin)</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <h2>Edit Book (Admin)</h2>
    <form action="update_book.php" method="post">
        <input type="hidden" name="id" value="<?= $book['id'] ?>">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($book['title']) ?>" required><br><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="<?= htmlspecialchars($book['author']) ?>" required><br><br>
        <label for="year_published">Year Published:</label><br>
        <input type="number" id="year_published" name="year_published" min="1901" max="<?php echo date('Y'); ?>" value="<?= $book['year_published'] ?>" required pattern="\\d{4}" title="Enter a valid year (1000 to current year)"><br><br>
        <input type="submit" value="Update Book">
    </form>
    <br>
    <a href="books.php">Back to Book List</a>
</body>
</html>