<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"]; 

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     echo "<script>window.location.href = 'superadmin.html';</script>";
    // } else {
    //    echo "<script>window.alert('Wrong username or password');</script>";
    // }

    
    if ($email === "superadmin@gmail.com" && $password === "12345678") {
        echo "<script>window.location.href = 'superadmin/home.html';</script>";
    } 
    elseif ($email === "admin@gmail.com" && $password === "12345678") {
        echo "<script>window.location.href = 'admin/dashboard.html';</script>";
    } 
    elseif ($email === "student@gmail.com" && $password === "12345678") {
        echo "<script>window.location.href = 'student/home.html';</script>";
    }
    else {
        // $error_message = "Wrong username or password";
        // echo "<p style='color: red;'>Wrong username or password</p>";
        echo '<script>';
        echo 'alert("Wrong username or password");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
    }
}

$conn->close();
?>
