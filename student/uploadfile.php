<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Assuming you are handling file uploads
    if ($_FILES['pdffile']['error'] == 0) {
        $pdffile = $_FILES['pdffile']['name'];
        $pdffile_tmp = $_FILES['pdffile']['tmp_name'];

        // Move the uploaded file to a directory
        $upload_dir = "uploads/";
        move_uploaded_file($pdffile_tmp, $upload_dir . $pdffile);

        // Insert the file information into the database
        $sql = "INSERT INTO file (pdffile) VALUES ('$pdffile')";
        
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }
}

// Close the database connection
$conn->close();
?>

<script>
    alert("Successfully uploaded.");
    window.location.href = "courses.php";
</script>
