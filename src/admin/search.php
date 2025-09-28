<?php
include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <h2>Admin: Search Results</h2>
    <form action="#" method="get">
        <input type="text" placeholder="Search by title, author, or year..." required>
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
    </table>
</body>
</html>
