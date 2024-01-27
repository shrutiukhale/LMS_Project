<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "lms_db";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$profile_image = $_POST['profile_image'];



$sql = "INSERT INTO profileupdate (name, email, phone,password,profile_image) VALUES ('$name', '$email', '$phone','$password','$profile_image')";


$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

mysqli_close($conn);
?>
<script>
    alert("Updated successful ");
</script>