<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <h2>User: Search Results</h2>
    <form action="#" method="get">
        <input type="text" placeholder="Search by title, author, or year..." required>
        <input type="submit" value="Search">
    </form>
    <br>
    <a href="catalog.php">Back to Catalog</a>
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
