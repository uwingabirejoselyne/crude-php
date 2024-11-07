<?php
include '../db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Update the status to 'deleted' instead of deleting the record
    $sql = "UPDATE clients SET status = 'deactivated' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Status updated to 'deleted' successfully";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $conn->close();
}

// Redirect to the main page after the update
header("location: tables.php");
?>
