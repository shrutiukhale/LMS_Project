<?php
include 'connect_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $studentId = $_GET['id'];

    // Perform the delete operation in the database
    $deleteSql = "DELETE FROM register_student WHERE id = $studentId";
    if ($conn->query($deleteSql) === TRUE) {
        echo "Student deleted successfully.";
        echo "<script>window.location = 'students.php';</script>";
    } else {
        echo "Error deleting student: " . $conn->error;
    }
} else {
    echo "Invalid student ID.";
}

// Close the database connection
$conn->close();
?>
