<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Student data</h2>

<table border="2">
  <tr>
    <td>Student_id</td>
    <td>name</td>
    <td>yeargroup</td>
    <td> email</td>
    <td>phone</td>
  
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select *from students"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['student_id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['yeargroup']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['phone']; ?></td>

    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
