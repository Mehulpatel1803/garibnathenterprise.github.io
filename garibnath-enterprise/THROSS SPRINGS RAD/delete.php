<?php
include 'garibnath_db.php';

$id = $_POST['id'];

$sql = "DELETE FROM ts_rod WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
