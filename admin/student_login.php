<?php
include 'connect_db.php';

$errors = array(); // Initialize an array to store validation errors

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate inputs
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Additional validation (you can customize this based on your requirements)
    if (empty($email) || empty($password)) {
        $errors[] = "All fields are required.";
    }

    if (count($errors) === 0) { // Only proceed with database operations if validation is successful
        // Sanitize inputs before using in SQL query
        global $conn; // Access the global connection object
        $email = $conn->real_escape_string($email);

        // Check user credentials using prepared statement
        $sql = "SELECT * FROM register_student WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Verify the entered password
                $trimmedPassword = trim($password);
                if (password_verify($trimmedPassword, $row['password'])) {
                    session_start();
                    $_SESSION['student_id'] = $row['id'];
                    $_SESSION['student_name'] = $row['name'];
                    $_SESSION['student_email'] = $row['email'];
                    $_SESSION['student_image'] = 'uploads/' . $row['image_path'];

                    // Add session_regenerate_id() for improved session security
                    session_regenerate_id();

                    echo "<script>alert('Logged in successfully!');</script>";
                    echo "<script>window.location = '../student/home.php';</script>";
                    exit();
                } else {
                    $errors[] = "Incorrect password.";
                }
            } else {
                $errors[] = "User not found with the provided email.";
            }
        } else {
            $errors[] = "Error executing the query: " . $conn->error;
        }
    } 
       
    }

    if (count($errors) > 0) {
        // Display validation errors using JavaScript alert
        echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
    }
// Redirect in case of errors
echo "<script>window.location = 'login.html';</script>";

