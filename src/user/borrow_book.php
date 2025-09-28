<?php
include '../connect.php';

if (!isset($_GET['id'])) {
    header('Location: catalog.php');
    exit();
}

$id = (int)$_GET['id'];
$sql = "UPDATE books SET status = 'borrowed' WHERE id = $id AND status = 'available'";
if ($conn->query($sql) === TRUE && $conn->affected_rows > 0) {
    echo "<p>Book borrowed successfully!</p>";
} else {
    echo "<p>Error: Book could not be borrowed (maybe already borrowed).</p>";
}
echo '<a href="catalog.php">Back to Catalog</a>';
?>
