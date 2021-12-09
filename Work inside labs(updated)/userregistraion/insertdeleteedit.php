<?php
 
include("db.php");
if(isset($_POST&#91;'submitinserdetails'&#93;)) {
  $firstname = $_POST&#91;'firstname'&#93;;
  $lastname = $_POST&#91;'lastname'&#93;;
  $email = $_POST&#91;'email'&#93;;
if(!empty($firstname) && !empty($lastname) && !empty($email) ) {
 $sql = "INSERT INTO `insertdeleteedittable`( `firstname`, `lastname`, `email`)
                                     VALUES ('$firstname','$lastname','$email')";
$qry = mysqli_query($connect, $sql);
if($qry) {
 echo "inserted successfully";
}
} else {
 echo "all fields must be filled";
}
}
 
?>
 
 
 
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="firstname"><br ><br >
<input type="text" name="lastname"><br ><br >
<input type="text" name="email"><br ><br >
<input type="submit" name="submitinserdetails" value="insert">
</form>
</body>
</html>