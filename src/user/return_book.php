<?php
include '../connect.php';

if (!isset($_GET['id'])) {
    header('Location: catalog.php');
    exit();
}

$id = (int)$_GET['id'];
$sql = "UPDATE books SET status = 'available' WHERE id = $id AND status = 'borrowed'";
if ($conn->query($sql) === TRUE && $conn->affected_rows > 0) {
    echo "<p>Book returned successfully!</p>";
} else {
    echo "<p>Error: Book could not be returned (maybe already available).</p>";
}
echo '<a href="catalog.php">Back to Catalog</a>';
?>
