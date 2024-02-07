<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM stdcourse";
$result = $conn->query($sql);

// Check if there are rows in the result set

?>

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

   /* Basic styling for the table */
   * {
      box-sizing: border-box;
      font-size: medium;
   }

   table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
   }

   th,
   td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
   }

   th {
      background-color: #f2f2f2;
   }

   /* Styling for the form within the table */
   form {
      margin: 0;
   }

   /* Styling for the file input and submit button */
   input[type="file"] {
      display: inline-block;
      margin-bottom: 10px;
   }

   input[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
   }

   input[type="submit"]:hover {
      background-color: #45a049;
   }

   /* Container styles for the table */
   section {
      margin: 20px;
   }

   h1 {
      font-size: 24px;
   }

   /* Responsive styles for smaller screens */
   @media screen and (max-width: 600px) {
      table {
         border: 0;
      }

      table thead {
         display: none;
      }

      table tbody tr {
         border: 1px solid #ddd;
         margin-bottom: 10px;
         display: block;
      }

      table tbody td {
         display: block;
         text-align: center;
      }

      input[type="file"],
      input[type="submit"] {
         width: 100%;
      }
   }
</style>

<body>
   <?php include 'header.php'; ?>
   <section>
      <h1>course details</h1>
      <table>
         <thead>
            <tr>
               <th scope="col">Course Name</th>
               <th scope="col">Course Day</th>
               <th scope="col">Course Description</th>
               <th scope="col">Course Link</th>
               <th scope="col">Practical</th>
               <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
            if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                         <td>" . $row["coursename"] . "</td>
                         <td>" . $row["date"] . "</td>
                         <td>" . $row["coursedescription"] . "</td>
                         <td><a href='" . $row["courselink"] . "' target='_blank'>" . $row["courselink"] . "</a></td>
                         <td><a href='" . $row["practicallink"] . "' target='_blank'>" . $row["practicallink"] . "</a></td>
                         <td>
                         <form action='uploadfile.php' method='post'  enctype='multipart/form-data'>
                         <input type='file' id='uploadfile' name='uploadfile' required />
                         <button type='submit'>Submit</button>
                         </form>
                         </td>
                        
                         </tr>";

               }
               echo "</table>";
            }
            ?>
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