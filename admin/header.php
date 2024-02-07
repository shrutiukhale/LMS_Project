<!-- Header Section -->
<?php
session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
$user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : '';
$user_image = isset($_SESSION['user_image']) ? $_SESSION['user_image'] : '';
?>
<header class="header">

    <section class="flex">

        <a href="dashboard.php" class="logo">RSL Solution</a>


        <div class="icons">

            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="notifications-btn" class="fa-solid fa-bell">
                <span class="icon-button__badge">2</span>
            </div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
        </div>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p style="font-size: 16px;">Some text in the Modal..</p>
                <hr />
                <p style="font-size: 16px;">Some text in the Modal..</p>
            </div>

        </div>

        <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="">
            <?php $user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';?>
             <h3><?php echo $user_name; ?></h3>
            <a href="profile.php" class="btn">view profile</a>

            <a href="../superadmin/index.html" class="btn">logout</a>
        </div>

    </section>

</header>


<script src="js/admin_script.js"></script>
<script src="js/script.js"></script>