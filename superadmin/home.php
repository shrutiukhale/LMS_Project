<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
<?php include 'header.php'; ?>
<section class="home-grid">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">Add a Admin</h3>
         <p class="tutor">.......</p>
         <a href="teachers.php" class="inline-btn">get started</a>
      </div>

      <div class="box">
         <h3 class="title">Assign Course</h3>
         <p class="tutor">.......</p>
         <a href="courses.php" class="inline-btn">get started</a>
      </div>

      <div class="box">
         <h3 class="title">Send Notifications</h3>
         <p class="tutor">.......</p>
         <a href="notification.php" class="inline-btn">get started</a>
      </div>

      <div class="box">
         <h3 class="title">View Reports</h3>
         <p class="tutor">.......</p>
         <a href="report.php" class="inline-btn">get started</a>
      </div>

   </div>

</section>
<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'sidebar.php'; ?>
   
</body>
</html>