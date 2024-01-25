<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Notication</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
      <style>
          <style>
      body {
         font-family: 'Nunito', sans-serif;
         font-size: large;
         margin: 0;
         padding: 0;
         background-color: #f4f4f4;
         font-size: 16px;
         font-weight: bold;
         
      }

      /* Header Styles */
      .btn {
         text-decoration: none;
         background-color: #007bff;
         color: #fff;
         padding: 5px 10px;
         border-radius: 5px;
         margin-left: 10px;
      }

      .flex-btn {
         margin-left: auto;
      }

      /* Notification Form Styles */
      #notification-container {
         display: flex;
         justify-content: center;
         /* align-items: center; */
         /* height: 100vh; */
      }

      #notification-form {
         max-width: 650px;
         width: 100%;
         padding: 20px;
         background-color: #fff;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         border-radius: 8px;
         text-align: center;
      }

      #notification-form h2 {
         margin-bottom: 20px;
         color: #333;
      }

      label {
         display: block;
         margin-bottom: 8px;
         text-align: left;
         color: #333;
      }

      select,
      textarea {
         width: 100%;
         padding: 8px;
         margin-bottom: 16px;
         box-sizing: border-box;
         border: 1px solid #ddd;
         border-radius: 4px;
         font-size: 16px;
      }

      button {
         background-color: #007bff;
         color: #fff;
         padding: 10px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         font-size: 16px;
      }

      button:hover {
         background-color: #0056b3;
      }

      body {
         font-family: 'Nunito', sans-serif;
         font-size: large;
      }


   </style>
</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.html" class="logo">RSL Solution </a>
         <div class="icons">

            <div id="unread-count" class="fa-regular fa-bell"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div>


         <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="">
            <p class="role">Super Admin </p>
            <a href="profile.html" class="btn">view profile</a>
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
         <img src="images/pic-1.jpg" class="image" alt="">
         <p class="role">Super Admin </p>
      </div>

      <nav class="navbar">
         <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
         <!--Newly created-->
         <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Admins</span></a>
         <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
         <!--Newly created-->
         <a href="report.php"><i class="fa-regular fa-eye"></i><span>Reports</span></a>
         <!--Newly created-->
         <a href="notification.php"><i class="fa-regular fa-bell"></i><span>Notification</span></a>
         <!--<a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
    <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>-->
      </nav>

   </div>
          <div id="notification-container" class="notification-container">
      <!-- Notification Form -->
      <div id="notification-form">
         <h2 style="text-align:center">Send Notification</h2>
       
         <label for="recipient-type">Select Recipient Type:</label>
         <select id="recipient-type ">
            <option value="admins">Admins</option>
            <option value="admin wise student">Admin wise student</option>
            <option value="all students">all students</option>
            <option value="java-course">Java Course Students</option>
            <option value="python-course">Python Course Students</option>
            <option value="c-course">C Course Students</option>
         </select>
         <br>
         <label for="recipient-type">Select Recipient:</label> 
   <select id="recipient-type">
      <option value="admins">Admin 1</option>
   </select>
         <br>
         <label for="notification-message">Notification Message:</label>
         <textarea id="notification-message" rows="6"></textarea>
         <br>
         <button onclick="sendNotification()"class="inline-btn">Send Notification</button>
      </div>

      <!-- Unread Notification Count -->
      <div id="unread-count" class="unread-count"></div>

      <!-- Notification Container -->
  </div>

      <script>
         // Sample data for recipients
         var recipients = {
            admins: ['admin1', 'admin2', 'admin3', 'all admins'],
            'admin wise student': ['admin1wiseStudents', 'admin2wiseStudents', 'admin3wiseStudents', 'all adminswise Students'],
            'all students': ['all students'],
            'java-course': ['JavaStudent1', 'JavaStudent2', 'JavaStudent3', 'all java course students'],
            'python-course': ['PythonStudent1', 'PythonStudent2', 'PythonStudent3', 'all python course students'],
            'c-course': ['CStudent1', 'CStudent2', 'CStudent3', 'all c course students'],
         };

         // Unread notification count
         var unreadCount = 0;

         // Update recipients dropdown based on the selected recipient type
         function updateRecipients() {
            var recipientType = document.getElementById('recipient-type').value;
            var recipientDropdown = document.getElementById('recipient');
            recipientDropdown.innerHTML = '';

            recipients[recipientType].forEach(function (recipient) {
               var option = document.createElement('option');
               option.value = recipient;
               option.text = recipient;
               recipientDropdown.add(option);
            });
         }

         // Send a notification to the selected recipient
         function sendNotification() {
            var recipientType = document.getElementById('recipient-type').value;
            var recipient = document.getElementById('recipient').value;
            var message = document.getElementById('notification-message').value;

            // Check if the message is not empty
            if (message.trim() === '') {
               alert('Please enter a notification message.');
               return;
            }

            // Display the notification on the page
            displayNotification(message, recipient);

            // Increment unread notification count
            unreadCount++;
            updateUnreadCount();

            // Clear the form fields
            document.getElementById('notification-message').value = '';

            // For demonstration purposes, log the notification to the console
            console.log(`Notification sent to ${recipient} (${recipientType}): ${message}`);
         }

         // Display the notification on the page
         function displayNotification(message, recipient) {
            var notificationContainer = document.getElementById('notification-container');
            var notificationElement = document.createElement('div');
            notificationElement.className = 'notification';
            notificationElement.innerHTML = `<strong>${recipient}:</strong> ${message}`;
            notificationContainer.appendChild(notificationElement);
         }

         // Update the unread notification count on the page
         function updateUnreadCount() {
            var unreadCountElement = document.getElementById('unread-count');
            unreadCountElement.textContent = ` ${unreadCount}`;
            // unreadCountElement.textContent = `Unread Notifications: ${unreadCount}`;
         }

         // Attach event listener to update recipients dropdown when recipient type changes
         document.getElementById('recipient-type').addEventListener('change', updateRecipients);

         // Initialize recipients dropdown on page load
         updateRecipients();
      </script>

      <!-- custom js file link  -->
      <script src="js/script.js"></script>


   </body>

</html>
