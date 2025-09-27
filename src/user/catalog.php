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
    <h2>User</h2>
    <a href="#">Logout</a>
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
    </table>
</body>
</html>