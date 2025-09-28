<?php
include '../connect.php';

if (!isset($_GET['id'])) {
    header('Location: books.php');
    exit();
}

$id = (int)$_GET['id'];
$sql = "DELETE FROM books WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "<p>Book deleted successfully!</p>";
} else {
    echo "<p>Error deleting book: " . $conn->error . "</p>";
}
echo '<a href="books.php">Back to Book List</a>';
?>