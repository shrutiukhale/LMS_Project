<?php
// Placeholder function to fetch admin details from the database

include 'db_connection.php';

if (isset($_GET['id'])) {
    $adminId = $_GET['id'];

    $sql = "SELECT * FROM admins WHERE id = $adminId"; // Replace with your actual query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $adminDetails = $result->fetch_assoc();
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin Profile</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
            <link rel="stylesheet" href="css/style.css">
        </head>

        <body>
            <header class="header">
                <section class="flex">
                    <a href="home.php" class="logo"> RSL Solution </a>
                    <form action="search.html" method="post" class="search-form">
                        <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                        <button type="submit" class="fas fa-search"></button>
                    </form>
                    <div class="icons">
                        <div id="menu-btn" class="fas fa-bars"></div>
                        <div id="search-btn" class="fas fa-search"></div>
                        <div id="user-btn" class="fas fa-user"></div>
                        <div id="toggle-btn" class="fas fa-sun"></div>
                    </div>
                    <div class="profile">
                        <img src="images/pic-1.jpg" class="image" alt="">
                        <p class="role">Super Admin</p>
                        <a href="profile.php" class="btn">View Profile</a>
                        <div class="flex-btn">
                            <a href="../index.php" class="option-btn">Logout</a>
                        </div>
                    </div>
                </section>
            </header>

            <div class="side-bar">
                <div id="close-btn">
                    <i class="fas fa-times"></i>
                </div>
                <div class="profile">
                    <img src="images/pic-1.jpg" class="image" alt="">
                    <p class="role">Super Admin</p>
                </div>
               
            </div>

            <section class="teacher-profile">
                <h1 class="heading">Profile Details</h1>
                <div class="details">
                    <div class="tutor">
                        <img src="<?php echo $adminDetails['profile_image']; ?>" alt="">
                        <h3><?php echo $adminDetails['name']; ?></h3>
                        <span><?php echo $adminDetails['email']; ?></span>
                    </div>
                    <div class="flex">
                        <!-- Display other admin details as needed -->
                    </div>
                </div>
            </section>

            <script src="js/script.js"></script>
            
<?php include 'sidebar.php'; ?>
        </body>

        </html>
<?php
    } else {
        echo "Admin not found.";
    }
} else {
    echo "Admin ID not provided.";
}
?>
