<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      /* Add your styles here */
      .error-message {
          color: red;
      }
  </style>

</head>
<body>
   <?php include 'header.php'; ?>

<section class="form-container">
   <form action="register_user.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
       <h3>Register Now</h3>

       <p>Your Name <span>*</span></p>
       <input type="text" name="name" id="name" placeholder="Enter your name" required maxlength="50" class="box">
       <span id="nameError" class="error-message"></span>

       <p>Your Email <span>*</span></p>
       <input type="email" name="email" id="email" placeholder="Enter your email" required maxlength="50" class="box">
       <span id="emailError" class="error-message"></span>

       <p>Your Password <span>*</span></p>
       <input type="password" name="pass" id="pass" placeholder="Enter your password" required maxlength="20" class="box">
       <span id="passwordError" class="error-message"></span>

       <p>Select Profile <span>*</span></p>
       <label for="file" class="file-label">Select Profile Image</label>
       <input type="file" name="file" id="file" accept="image/*" required class="box">

       <input type="submit" value="Register New" name="submit" class="btn">
   </form>

   <script>
       function validateForm() {
           // Reset error messages
           document.getElementById('nameError').innerText = '';
           document.getElementById('emailError').innerText = '';
           document.getElementById('passwordError').innerText = '';

           // Validate name (name and surname)
           const nameInput = document.getElementById('name');
           const nameValue = nameInput.value.trim();
           if (!nameValue.includes(' ')) {
               document.getElementById('nameError').innerText = 'Please enter your full name (including surname)';
               return false;
           }

           // Validate email
           const emailInput = document.getElementById('email');
           const emailValue = emailInput.value.trim();
           if (!emailValue.includes('@') || (emailValue.indexOf('@') === emailValue.length - 1)) {
               document.getElementById('emailError').innerText = 'Please enter a valid email address';
               return false;
           }

           // Validate password (should contain at least one lowercase, one uppercase, and one digit)
           const passwordInput = document.getElementById('pass');
           const passwordValue = passwordInput.value;
           const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;
           if (!passwordRegex.test(passwordValue)) {
               document.getElementById('passwordError').innerText = 'Password should contain at least one lowercase letter, one uppercase letter, and one digit';
               return false;
           }

           // Form is valid
           return true;
       }
   </script>
</section>

<?php include 'sidebar.php'; ?>
<script src="js/script.js"></script>

   
</body>
</html>