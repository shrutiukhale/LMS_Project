<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student List</title>

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
           
            <img src="images/pic-1.jpg" alt="">
            <p class="role">Admin<p>
            <a href="profile.html" class="btn">view profile</a>
            <div class="flex-btn">
               <!-- <a href="login.php" class="option-btn">login</a>
               <a href="register.php" class="option-btn">register</a> -->
            </div>
            <a href="logout.php" class="btn">logout</a>

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
         <img src="images/pic-1.jpg" alt="">
            <!-- <h3>admin name</h3> -->
            <p class="role">Admin<p>
            <!-- <a href="profile.php" class="btn">view profile</a> -->
            <!-- <h3>please login or register</h3> -->
             <div class="flex-btn">
               <!-- <a href="login.php" class="option-btn">login</a>
               <a href="register.php" class="option-btn">register</a> -->
            </div> 
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

<section class="teachers">

    <h1 class="heading">Students List</h1><!--Newly created-->  
 
    <form action="" method="post" class="search-form" style="margin: 15px; display: flex;">
       <input type="text" name="search_box" placeholder="search student" required maxlength="100" style="width: 50rem;
       border-radius: .5rem;
       display: flex;
       align-items: center;
       gap: 2rem;
       padding: 1.5rem 2rem;
       margin-right: 1rem;">
       <button type="submit" class="fas fa-search" name="search_student" style="width: 5rem; border-radius: .5rem; background-color: blueviolet;"></button>
       <div class="box" style="margin-left: auto;">
         <div class="box offer">
           <!-- <h3 style="font-size: 20px;">Add a student</h3>Newly created -->
           <!-- <p>..........</p> -->
           <a href="register.html" class="inline-btn">Add New Student</a>
        </div>
        </div>
       
    </form>

    <?php include 'student_display.php'; ?>
 
    <div class="box-container" style="display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 2fr));
    align-items: flex-start;
    justify-content: center;
    gap: 1.5rem;">
    

<!-- 
       <div class="box">
          <div class="tutor">
             <img src="images/pic-2.jpg" alt="">
             <div class="stu-box">
                <h3>student1</h3>
                <span>developer</span>
             </div>
          </div>
          <p>total playlists : <span>4</span><span>/10</span></p>
          <p>total videos : <span>18</span><span>/25</span></p>
          <a href="student_profile.html" class="inline-btn">view profile</a>
       </div>
 
       <div class="box">
          <div class="tutor">
             <img src="images/pic-3.jpg" alt="">
             <div class="stu-box">
                <h3>student2</h3>
                <span>developer</span>
             </div>
          </div>
          <p>total playlists : <span>4</span><span>/10</span></p>
          <p>total videos : <span>18</span><span>/25</span></p>
          <a href="student_profile.html" class="inline-btn">view profile</a>
       </div>
 
       <div class="box">
          <div class="tutor">
             <img src="images/pic-4.jpg" alt="">
             <div class="stu-box">
                <h3>student3</h3>
                <span>developer</span>
             </div>
          </div>
          <p>total playlists : <span>4</span><span>/10</span></p>
          <p>total videos : <span>18</span><span>/25</span></p>
          <a href="student_profile.html" class="inline-btn">view profile</a>
       </div>
 
       <div class="box">
          <div class="tutor">
             <img src="images/pic-5.jpg" alt="">
             <div class="stu-box">
                <h3>student4</h3>
                <span>developer</span>
             </div>
          </div>
          <p>total playlists : <span>4</span><span>/10</span></p>
          <p>total videos : <span>18</span><span>/25</span></p>
          <a href="student_profile.html" class="inline-btn">view profile</a>
       </div>
 
       <div class="box">
          <div class="tutor">
             <img src="images/pic-6.jpg" alt="">
             <div class="stu-box">
                <h3>student5</h3>
                <span>developer</span>
             </div>
          </div>
          <p>total playlists : <span>4</span><span>/10</span></p>
          <p>total videos : <span>18</span><span>/25</span></p>
          <a href="student_profile.html" class="inline-btn">view profile</a>
       </div>

       <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="stu-box">
               <h3>student6</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span><span>/10</span></p>
         <p>total videos : <span>18</span><span>/25</span></p>
         <a href="student_profile.html" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="stu-box">
               <h3>student7</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span><span>/10</span></p>
         <p>total videos : <span>18</span><span>/25</span></p>
         <a href="student_profile.html" class="inline-btn">view profile</a>
      </div>


      
      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="stu-box">
               <h3>student8</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span><span>/10</span></p>
         <p>total videos : <span>18</span><span>/25</span></p>
         <a href="student_profile.html" class="inline-btn">view profile</a>
      </div> -->



</section>








      

<script src="admin_script.js"></script>

<script>
   document.querySelectorAll('.playlists .box-container .box .description').forEach(content => {
      if(content.innerHTML.length > 100) content.innerHTML = content.innerHTML.slice(0, 100);
   });
</script>

</body>
<!-- 
<footer class="footer">

   &copy; copyright @ 2024 by <span>RSL Pvt Lmt</span> | all rights reserved!

</footer> -->
</html>