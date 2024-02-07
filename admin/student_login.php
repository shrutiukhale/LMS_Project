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



         // Use prepared statement to prevent SQL injection
         $stmt = $conn->prepare("SELECT * FROM register_student WHERE email = ?");
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $result = $stmt->get_result();

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Verify the entered password
               // Verify the entered password
               $trimmedPassword = trim($password);
               if (password_verify($trimmedPassword, $row['password'])) {
                   session_start();
                   $_SESSION['st_id'] = $row['id'];
                   $_SESSION['st_name'] = $row['name'];
                   $_SESSION['st_email'] = $row['email'];
                   $_SESSION['st_image'] = 'admins/uploads/' . $row['image_path'];

                   session_regenerate_id();

                    echo "<script>alert('Logged in successfully!');</script>";
                    echo "<script>window.location = '../student/home.php';</script>";
                } else {
                    echo "<script>alert('Incorrect password.');</script>";
                    echo "<script>window.location = 'login.html';</script>";
        

                }
            } else {
                $errors[] = "User not found with the provided email.";
                echo "<script>window.location = 'login.html';</script>";
            }
        } else {
            $errors[] = "Error executing the query: " . $conn->error;
            echo "<script>alert('Error executing the query: " . $conn->error . "');</script>";
        }
    }

    if (count($errors) > 0) {
        // Display validation errors using JavaScript alert
        echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
    }
}

