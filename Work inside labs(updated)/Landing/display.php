<?php
include("db.php");

?>


<!DOCTYPE html>
<html>
<head>
        <title></title>
</head>
<body>
<table>

<tr>

<?php
$sel="SELECT * FROM 'insertdeleteedit' ";
$qrydisplay = mysqli_query($connect, $sel);
while($row = mysqli_fetch_array($qrydisplay)){
    $id = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    
    echo "<td>".$id."</td><td>".$firstname."</td>";

}

?>
</tr>
</table>
</body>
</html>
