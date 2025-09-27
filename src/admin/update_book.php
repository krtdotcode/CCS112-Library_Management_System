<?php
include '../connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $year = (int)$_POST['year_published'];

    $sql = "UPDATE books SET title='$title', author='$author', year_published=$year WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Book updated successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
    echo '<a href="books.php">Back to Book List</a>';
} else {
    header('Location: books.php');
    exit();
}
?>