<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Data</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: separate;
            border-spacing: 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>

</head>

<body>
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
    $sql = "SELECT * FROM courses";
    $result = $conn->query($sql);

    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table>
        <tr>
             <th>Course Name</th>
             <th>Course Description</th>
             <th>Course Link</th>
             <th>Practical Link</th>
             <th>Assign Course </th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["coursename"] . "</td>
                <td>" . $row["coursedescription"] . "</td>
                <td><a href='" . $row["courselink"] . "' target='_blank'>" . $row["courselink"] . "</a></td>
                <td><a href='" . $row["practicallink"] . "' target='_blank'>" . $row["practicallink"] . "</a></td>
               
                </tr>";
                
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
    ?>
</body>

</html>