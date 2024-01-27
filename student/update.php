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

   <section class="form-container">

      <form action="updateprofile.php" method="post" enctype="multipart/form-data">
         <h3>update profile</h3>
         <p>update name</p>
         <input type="text" name="name" placeholder="your name" maxlength="50" class="box">
         <p>update email</p>
         <input type="email" name="email" placeholder="your email id" maxlength="50" class="box">
         <!-- update phone number -->
         <p>update mobile no.</p>
         <input type="tel" pattern="[0-9]{10}" name="phone" placeholder="enter your mobile number" maxlength="12"
            class="box">
         <p>Change password</p>
         <input type="password" name="password" placeholder="enter your new password" maxlength="20" class="box">
         <p>update pic</p>
         <input type="file" accept="image/*" class="box" name="profile_image">
         <input type="submit" value="update profile" name="submit" class="btn">
      </form>

   </section>


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <?php include 'sidebar.php'; ?>


</body>

</html>