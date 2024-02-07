<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>

<body>
   <?php include 'header.php'; ?>
   <!-- Page Content -->
   <!-- assigned courses -->
   <div>
      <!-- <h2>Assign Course to Admin</h2> -->

      <?php

      include 'assign_course.php';
      ?>


      <script src="js/admin_script.js"></script>


      <?php include 'sidebar.php'; ?>



</body>

</html>