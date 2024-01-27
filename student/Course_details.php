<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
   /* Add your custom CSS styles here */

   .table {
      width: 100%;
      margin-bottom: 1rem;
      color: #212529;
      font-size: larger;
      font-size: 16px;
      font-family: 'Nunito', sans-serif;
      text-align: center;
   }

   .table th,
   .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
      font-size: larger;
   }

   .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
      font-size: larger;
   }

   .table tbody+tbody {
      border-top: 2px solid #dee2e6;
      font-size: larger;

   }

   .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
   }

   .table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
   }

   .table-primary,
   .table-primary>th,
   .table-primary>td {
      background-color: #b8daff;
   }

   /* Add more styles or customize as needed */
</style>


<body>
   <header class="header">
      <section class="flex">
         <a href="home.php" class="logo">RSL Solution</a>
         <form action="#" method="post" class="search-form">
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


   <div class="side-bar">
      <div id="close-btn">
         <i class="fas fa-times"></i>
      </div>
      <div class="profile">
         <img src="images/pic-5.jpg" class="image" alt="">
         <p class="role">RSL Student</p>
      </div>

      <nav class="navbar">
         <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
         <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
         <!-- <a href="practical.html"><i class="fas fa-chalkboard-user"></i><span>Practicals</span></a> -->
         <a href="program.php"><i class="fas fa-headset"></i><span>Program</span></a>
         <a href="notification.php"><i class="fa-regular fa-bell"></i><span>Notification</span></a>
      </nav>
   </div>

   <section class="course-details">

      <h1 class="heading">course details</h1>

      <div class="row">

         <div class="column">
            <form action="" method="post" class="save-course">
               <button type="submit"><i class="far fa-bookmark"></i> <span>save course</span></button>
            </form>

            <div class="thumb">
               <img src="images/thumb-1.png" alt="">
               <span>10 videos</span>
            </div>
         </div>
         <div class="column">

            <div class="details">
               <h3>complete HTML tutorial</h3>

               <p>
                  This is a complete course on how to build websites using the HTML language.
                  It includes all the
                  basic elements of HTML such as headings, paragraphs, images and links.
                  The course also covers advanced topics like forms, tables, lists etc.
                  All this in an easy to follow manner with detailed explanations for each concept.
               </p>

            </div>
         </div>
      </div>

   </section>

   <section class="course-videos">
      <div class="details">

         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">Day</th>
                  <th scope="col">Course Link</th>
                  <th scope="col">Practical</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
               </tr>
               <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
               </tr>
               <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
               </tr>
               <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
               </tr>

            </tbody>
         </table>
      </div>

   </section>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>
   <!-- Bootstrap JS and Popper.js (Optional) -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


   <?php include 'sidebar.php'; ?>

</body>

</html>