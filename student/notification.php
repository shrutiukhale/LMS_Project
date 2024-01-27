<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Practicals</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">RSL Solution</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="notification-btn" class="fa-regular fa-bell"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

     
   <div class="profile">
      <img src="images/pic-5.jpg" class="image" alt="">
      <p class="role">RSL Student</p>
      <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="../index.php" class="option-btn">logout</a>
         </div>
      </div>

   </section>

</header>   

<section class="practical">

   <div class="box-container">

      <div class="box offer">
         <h3>Notifications</h3>
         <p></p>

      </div>
</section> 


<!-- custom js file link  -->
<script src="js/script.js"></script>
   
<?php include 'sidebar.php'; ?>

   
</body>
</html>