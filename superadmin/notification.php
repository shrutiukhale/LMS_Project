<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: medium;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #notification-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            position: relative;
        }

        .notification {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            position: relative;
            transition: background-color 0.3s ease;
        }

        .notification:hover {
            background-color: #f9f9f9;
        }

        .notification.unread {
            background-color: #e6f7ff;
        }

        .notification header {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .notification time {
            color: #888;
            font-size: 12px;
        }

        #notification-count {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 50%;
        }

        select, button {
            margin-top: 10px;
        }
    </style>
   <title>Notication</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">RSL Solution </a>

      <!-- <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form> -->

      <div class="icons">
       
         <div id="notification-btn" class="fa-regular fa-bell"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

     
   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <p class="role">Super Admin </p>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="../index.php" class="option-btn">logout</a>
         </div>
      </div>

   </section>

</header>   

<section class="practical">

   <div class="box-container">

      <div id="notification-container">
         <h1>Notification Center</h1>
         <!-- <p>Unread Notifications: <span id="notification-count"class="fa-regular fa-bell">0</span></p>
  -->
         <select id="recipient-type">
             <option value="all">All Students</option>
             <option value="course">Course Wise</option>
             <option value="admin">Admin Wise</option>
         </select>
 
         <select id="recipient-list" style="display:none;"></select>
 
         <input type="text" id="notification-text" placeholder="Type your notification here">

         <br>

         <br>
 
         <button onclick="sendNotification()"class="inline-btn">Send Notification</button>
 
         <div id="notification-list"></div>
     </div>
 
     <script>
         let notificationCount = 0;
 
         function sendNotification() {
             const recipientType = document.getElementById('recipient-type').value;
             const recipientList = document.getElementById('recipient-list').value;
             const notificationText = document.getElementById('notification-text').value;
 
             if (notificationText.trim() === '') {
                 alert('Please enter a notification message.');
                 return;
             }
 
             // Simulate sending notification to admin and students
             const notification = {
                 text: notificationText,
                 timestamp: new Date(),
                 read: false
             };
 
             displayNotification(notification);
             updateNotificationCount();
         }
 
         function displayNotification(notification) {
             const notificationList = document.getElementById('notification-list');
             const recipientList = document.getElementById('recipient-list');
             const recipientType = document.getElementById('recipient-type').value;
 
             const notificationElement = document.createElement('div');
             notificationElement.className = 'notification';
             if (!notification.read) {
                 notificationElement.classList.add('unread');
             }
 
             notificationElement.innerHTML = `
                 <header>${notification.text}</header>
                 <time>${formatTimestamp(notification.timestamp)}</time>
             `;
 
             notificationList.prepend(notificationElement);
 
             // In a real system, you would determine the recipients and update the recipient list accordingly.
             // This is just a basic example.
             if (recipientType === 'course') {
                 // Update the course list based on the backend data
                 // recipientList.innerHTML = '<option value="course1">Course 1</option><option value="course2">Course 2</option>';
             } else if (recipientType === 'admin') {
                 // Update the admin list based on the backend data
                 // recipientList.innerHTML = '<option value="admin1">Admin 1</option><option value="admin2">Admin 2</option>';
             }
         }
 
         function updateNotificationCount() {
             notificationCount++;
             document.getElementById('notification-count').textContent = notificationCount;
         }
 
         function formatTimestamp(timestamp) {
             const options = { year: 'numeric', month: 'short', day: 'numeric', hour: 'numeric', minute: 'numeric' };
             return new Intl.DateTimeFormat('en-US', options).format(timestamp);
         }
 
         // Handle recipient type change
         document.getElementById('recipient-type').addEventListener('change', function () {
             const recipientList = document.getElementById('recipient-list');
             const recipientType = this.value;
 
             if (recipientType === 'course' || recipientType === 'admin') {
                 recipientList.style.display = 'block';
             } else {
                 recipientList.style.display = 'none';
             }
         });
     </script>
</section> 


<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'sidebar.php'; ?>
   
</body>
</html>