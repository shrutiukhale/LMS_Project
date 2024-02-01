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
<style>
   body {
      font-family: 'Nunito', sans-serif;
      font-size: large;
   }

   #courseAssignment {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      margin: 20px auto;
   }

   #courseAssignment h2 {
      text-align: center;
      color: #333;
   }

   #assignmentForm {
      display: flex;
      flex-direction: column;
   }

   label {
      margin-bottom: 8px;
   }

   select,
   input,
   button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
   }

   button {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
      border: none;
      border-radius: 4px;
   }

   button:hover {
      background-color: #45a049;
   }

   #course-form h2 {
      text-align: center;
   }

   select,
   input,
   button {
      margin-top: 10px;
   }

   #course-form label {
      display: block;
      margin-bottom: 8px;
   }

   #course-form select,
   #course-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
   }

   #assign-admin {
      border: 1px solid black;
   }

   #link {
      border: 1px solid black;
   }

   #course-form button {
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
   }

   #course-form button:hover {
      background-color: #0056b3;
   }
</style>

<body>
<?php include 'header.php'; ?>
    <!-- Menu Section -->
   <div id="courseAssignment">
      <h2>Assign Courses to Students</h2>
      <br>
      <form id="assignmentForm">
         <div id="course-form">

            <label for="assign-admin">Select Recipient Type:</label>
            <select id="assign-admin">
               <option value="alladmins">All Students</option>
               <option value="admin1">Full Stack Developer </option>
               <option value="admins">Java Developer</option>
               <option value="admins">web Developer</option>
             
            </select>
            <br>
            <label for="link">Course Link:</label>
            <input type="text" id="link" placeholder="Enter Course link here..">
            <br>
            <label for="link">Practical Link:</label>
            <input type="text" id="link" placeholder="Enter Practical link here..">
            <br>
            <button onclick="assignCourse()" class="inline-btn">Assign Course</button>
         </div>
      </form>

      <script>
         function assignCourse() {
            // Get form elements
            var recipientType = document.getElementById('recipient-type').value;
            var courseLink = document.getElementById('link').value.trim();
            var practicalLink = document.getElementById('pracLink').value.trim();

            // Simple form validation
            if (!recipientType || !courseLink || !practicalLink) {
               alert('Please fill out all fields before assigning the course.');
               return;
            }

            // Implement logic to send data to the backend
            // Example using fetch API
            fetch('', {
               method: 'POST',
               headers: {
                  'Content-Type': 'application/json',
               },
               body: JSON.stringify({
                  recipientType: recipientType,
                  courseLink: courseLink,
                  practicalLink: practicalLink,
               }),
            })
               .then(response => response.json())
               .then(data => {
                  console.log('Course assigned successfully:', data);
                  // You can add further actions here if needed
               })
               .catch(error => {
                  console.error('Error assigning course:', error);
               });
         }
      </script>
    <script src="js/admin_script.js"></script>


      <?php include 'sidebar.php'; ?>



</body>

</html>