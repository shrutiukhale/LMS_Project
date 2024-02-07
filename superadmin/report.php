<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Report</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <style>
      /* Add the styles from your existing CSS */
      body {
         font-family: 'Arial', sans-serif;
         font-size: large;
         /* color: blue; */
         /* background-color: #f8f9fa; */
      }
    

       .navbar {
         /* background-color: #fff; */
         padding: 10px;
      } 

      .main-content {
        /* background-color: #fff; */
         padding: 20px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         border: 1px solid #dee2e6;
         border-radius: 2px;
         margin-bottom: 10px;
      }

      #adminReport {
         background-color: #ffffff;
      } 

       #studentReport {
         background-color: #ffffff;
      } 

      .navbar h2 {
         font-weight: bold;
         
      }

      .navbar a {
         font-weight: bold;
         text-decoration: none;
         /* color: #343a40; */
         padding: 10px 10px;
         display: inline-table;
         margin-right: 20px;
         border-radius:20px;
      }
      .navbar a.admin-report ,
      .navbar a.student-report {
        
         color: black;
}
      .options {
         margin-top: 10px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 20px;
      }

      th, td {
         border: 1px solid #dee2e6;
         padding: 12px;
         text-align: left;
      }

      th {
         background-color: #343a40;
         color: #fff;
      }
      tr {
    /* Increase padding to increase the height of table rows */
    padding: 15px;
    }

    .form-label {
    font-weight: bold;
}

.navbar a:hover {
    background-color: #e4e1e1;
}
.logo {
    text-decoration: none; 
}

      .download-btn {
         margin-top: 10px;
         width: 100px;
         font-size: 10px;
      }
    

      .hide-content {
         display: none;
      }
   </style>
</head>
<body>
<?php include 'header.php'; ?>

<section class="home-grid">
   <div class="container-fluid">
      <div class="row">
         <!-- Topbar -->
         <div class="row">
            <div class="navbar">
               <h2>Reports</h2>
               <ul>
                  <li><a href="#" onclick="showReport('adminReport')"><i class="download-btn"></i> Admin Report </a></li>
                  <li><a href="#" onclick="showReport('studentReport')"><i class="download-btn"></i> Student Report</a></li>
               </ul>
            </div>
         </div>

         <!-- Main Content -->
         <div class="row">
            <div class="col-md-12">
               <!-- Admin Report -->
               <div class="main-content hide-content" id="adminReport">
                  <!-- Include common report form -->
                  <h1>Admin Report</h1>
                  <div class="options">
                     
                     <!-- Date Range Selector -->
                     <div class="row">
                        <div class="col-md-4">
                           <label for="startDateAdmin" class="form-label">Start Date:</label>
                           <input type="date" class="form-control" id="startDateAdmin" name="startDateAdmin">
                        </div>
                        <div class="col-md-4">
                           <label for="endDateAdmin" class="form-label">End Date:</label>
                           <input type="date" class="form-control" id="endDateAdmin" name="endDateAdmin">
                        </div>
                        <div class="download-btn">
                        <button class="btn btn-primary" onclick="downloadReport('pdf', 'adminReport')" ><i class="fas fa-file-pdf"></i> </button>
                        </div>
                        <div class="download-btn">
                           <button class="btn btn-success" onclick="downloadReport('excel', 'adminReport')"><i class="fas fa-file-excel"></i> </button>
                        </div>
                        <div class="col-md-4">
                           <label for="search" class="form-label">Search:</label>
                           <input type="text" class="form-control" id="search" placeholder="Search...">
                        </div>
                     </div>
                     
                     <!-- Download Options -->
                     <!-- <div class="download-btn">
                        <button class="btn btn-primary" onclick="downloadReport('pdf', 'adminReport')" ><i class="fas fa-file-pdf"></i> </button>
                        <button class="btn btn-success" onclick="downloadReport('excel', 'adminReport')"><i class="fas fa-file-excel"></i> </button>
                     </div> -->
                  </div>

                  <!-- Table -->
                  <div class="table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Sr No.</th>
                              <th>Name</th>
                              <th>Location</th>
                              <th>Address</th>
                              <th>Date Time</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <!-- Populate with actual data -->
                        </tbody>
                     </table>
                  </div>
               </div>

               <!-- Student Report -->
               <div class="main-content hide-content" id="studentReport">
                  <!-- Include common report form -->
                  <h1>Student Report</h1>
                  <div class="options">
                     <!-- Date Range Selector -->
                     <div class="row">
                        <div class="col-md-4">
                           <label for="startDateStudent" class="form-label">Start Date:</label>
                           <input type="date" class="form-control" id="startDateStudent" name="startDateStudent">
                        </div>
                        <div class="col-md-4">
                           <label for="endDateStudent" class="form-label">End Date:</label>
                           <input type="date" class="form-control" id="endDateStudent" name="endDateStudent">
                        </div>
                        <div class="download-btn">
                           <button class="btn btn-primary" onclick="downloadReport('pdf', 'adminReport')" ><i class="fas fa-file-pdf"></i> </button>
                        </div>
                        <div class="download-btn">
                           <button class="btn btn-success" onclick="downloadReport('excel', 'adminReport')"><i class="fas fa-file-excel"></i> </button>
                        </div>
                        <div class="col-md-4">
                           <label for="search" class="form-label">Search:</label>
                           <input type="text" class="form-control" id="search" placeholder="Search...">
                        </div>
                     </div>

                     <!-- Download Options -->
                     <!-- <div class="download-btn">
                        <button class="btn btn-primary" onclick="downloadReport('pdf', 'studentReport')"><i class="fas fa-file-pdf"></i> </button>
                        <button class="btn btn-success" onclick="downloadReport('excel', 'studentReport')"><i class="fas fa-file-excel"></i> </button>
                     </div> -->
                  </div>

                  <!-- Table -->
                  <div class="table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Sr No.</th>
                              <th>Name</th>
                              <th>Location</th>
                              <th>Address</th>
                              <th>Date Time</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <!-- Populate with actual data -->
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>

<!-- <footer class="footer">
   &copy; copyright @ 2024 by <span>RSL Pvt Lmt</span>  | all rights reserved!
</footer> -->

<!-- Custom JS file link -->
<script src="js/script.js"></script>

<!-- Bootstrap JS (optional, if needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
   function showReport(reportType) {
      // Hide all reports
      $('.main-content').addClass('hide-content');

      // Show the selected report
      $('#' + reportType).removeClass('hide-content');
   }

   function downloadReport(format, reportType) {
      // Retrieve start and end dates based on the report type
      const startDate = $('#' + 'startDate' + reportType).val();
      const endDate = $('#' + 'endDate' + reportType).val();

      // Code to handle download logic based on the selected format (pdf or excel)
      console.log('Download ' + format + ' for ' + reportType + ' from ' + startDate + ' to ' + endDate);
   }
</script>

  <?php include 'sidebar.php'; ?>

</body>

</html>
