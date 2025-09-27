<?php
include '../connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $year = (int)$_POST['year_published'];

    $sql = "INSERT INTO books (title, author, year_published) VALUES ('$title', '$author', $year)";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Book added successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
    echo '<a href="add_book.php">Add Another Book</a> | <a href="books.php">Back to Book List</a>';
} else {
    header('Location: add_book.php');
    exit();
}
?>