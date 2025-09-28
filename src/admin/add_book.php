<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Book (Admin)</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <h2>Add New Book (Admin)</h2>
    <form action="insert_book.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" required><br><br>
        <label for="year_published">Year Published:</label><br>
        <input type="number" id="year_published" name="year_published" min="1901" max="<?php echo date('Y'); ?>" required pattern="\\d{4}" title="Enter a valid year (1000 to current year)"><br><br>
        <input type="submit" value="Add Book">
    </form>
    <br>
    <a href="books.php">Back to Book List</a>
</body>
</html>