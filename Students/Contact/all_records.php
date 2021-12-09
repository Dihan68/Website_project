<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Student data</h2>

<table border="2">
  <tr>
    <td>St.No.</td>
    <td>Full Name</td>
    <td>Year group</td>
    <td> email</td>
    <td>Phone</td>
    <td> message</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from list"); // fetch data from database


?>

  <tr>
    <td><?php echo $data['student-id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['fldPhone']; ?></td>
    <td><?php echo $data['message']; ?></td>
  </tr>	
  <?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>