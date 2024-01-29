

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin_style.css">

</head>
<body>

   <header class="header">
      
      <section class="flex">
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            </div>
   
         <a href="dashboard.html" class="logo">RSL Solution</a>
   
         <form action="/admin/search_page.html" method="post" class="search-form">
            <input type="text" name="search" placeholder="search here..." required maxlength="100">
            <button type="submit" class="fas fa-search" name="search_btn"></button>
         </form>
   
         <div class="icons">
            
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
              <hr/>
              <p style="font-size: 16px;">Some text in the Modal..</p>
            </div>
          
          </div>
         
          <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="">
            <p class="role">Admin </p>    
            <a href="profile.html" class="btn">view profile</a>
            <div class="flex-btn">
               <!-- <a href="login.php" class="option-btn">login</a>
               <a href="register.php" class="option-btn">register</a> -->
            </div>
            <a href="../index.php" class="btn">logout</a>
            
            <!-- <h3>please login or register</h3>
             <div class="flex-btn">
               <a href="login.html" class="option-btn">login</a>
               <a href="register.html" class="option-btn">register</a>
            </div>
             -->
         </div>
   
      </section>
   
   </header>
   
   <!-- header section ends -->
   
   <!-- side bar section starts  -->
   
   <div class="side-bar">
   
      <div class="close-side-bar">
         <i class="fas fa-times"></i>
      </div>
   
      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <p class="role">Admin </p>
      </div>   
   
      <nav class="navbar">
         
         <a href="dashboard.html"><i class="fas fa-home"></i><span>home</span></a>
         <a href="students.php"><i class="fa-solid fa-graduation-cap"></i><span>students</span></a>
         <a href="report.html"><i class="fa-solid fa-file-lines"></i><span>report</span></a>
         <a href="notification.html"><i class="fa-solid fa-bell"></i><span>Notification</span></a>
        
         <!-- <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');"><i class="fas fa-right-from-bracket"></i><span>logout</span></a> -->
      </nav>
   
   </div>
   
   <!-- side bar section ends -->
   
<section class="tutor-profile" style="min-height: calc(100vh - 19rem);"> 

   <h1 class="heading">profile details</h1>

   <div class="details">
      <div class="tutor">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3></h3>
         <span>admin</span>
         <a href="update.html" class="inline-btn">update profile</a>
      </div>
      <div class="flex">
         <div class="box">
            <span></span>
            <p>total playlists</p>
            <a href="playlists.html" class="btn">view playlists</a>
         </div>
         <div class="box">
            <span><?= $total_contents; ?></span>
            <p>total videos</p>
            <a href="contents.html" class="btn">view contents</a>
         </div>
         <div class="box">
            <span><?= $total_likes; ?></span>
            <p>total students</p>
            <a href="contents.php" class="btn">view contents</a>
         </div>
         <div class="box">
            <span></span>
            <p>total test</p>
            <a href="comments.php" class="btn">view comments</a>
         </div>
      </div>
   </div>

</section>

<section class="courses">

   <h1 class="heading">our courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete javascript tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

   </div>

</section>





<!-- 
<footer class="footer">

   &copy; copyright @ 2024 by <span>RSL Pvt Lmt</span> | all rights reserved!

</footer> -->

<script src="admin_script.js"></script>

</body>
</html>