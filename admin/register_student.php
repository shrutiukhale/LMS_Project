<?php
include 'connect_db.php';

$errors = array(); // Initialize an array to store validation errors
$isValid = true; // Initialize a variable to track overall validation status

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate inputs
    $name = validateInput($_POST['name']);
    $profession = validateInput($_POST['profession']);
    $email = validateEmail($_POST['email']);
    $password = validatePassword($_POST['pass']);
    $confirmPassword = validatePassword($_POST['cpass']);


    // Additional validation (you can customize this based on your requirements)
    if (empty($name) || empty($profession) || empty($email) || empty($password) || empty($confirmPassword)) {
        $errors[] = "All fields are required.";
        $isValid = false; // Set validation status to false
    }
   
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
        $isValid = false; // Set validation status to false
    }
   

    if ($isValid) { // Only proceed with database operations if validation is successful
        // Sanitize inputs before using in SQL query
        global $conn; // Access the global connection object
        $name = $conn->real_escape_string($name);
        $profession = $conn->real_escape_string($profession);
        $email = $conn->real_escape_string($email);

        $trimmedPassword = trim($_POST['pass']);
        $hashedPassword = password_hash($trimmedPassword, PASSWORD_BCRYPT);


        // Upload image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        // Insert user data into the database
        $sql = "INSERT INTO register_student (name, profession, email, password, image_path) VALUES ('$name', '$profession', '$email', '$hashedPassword', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful!');</script>";
            echo "<script>window.location = 'login.html';</script>";
        } else {
            if ($conn->error) {
                $errors[] = "Error: " . $sql . "<br>" . $conn->error;
            } else {
                $errors[] = "Error: " . $sql;
            }
        }
        $conn->close();
    } else {
        // Display validation errors using JavaScript alert
        echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
        echo "<script>window.location = 'register.html';</script>";
    }
}

function validateInput($input) {
    // Basic input validation (you can customize this based on your requirements)
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function validateEmail($email) {
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        global $errors; // Access the global errors array
        $errors[] = "Invalid email format.";
        return false;
    }
    return $email;
}

function validatePassword($password) {
    // Password should contain at least one uppercase letter and one special character
    if (!preg_match("/^(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/", $password)) {
        global $errors; // Access the global errors array
        $errors[] = "Password should contain at least one uppercase letter, one special character and length 8 character.";
        return false;
    }
    return true;
}

