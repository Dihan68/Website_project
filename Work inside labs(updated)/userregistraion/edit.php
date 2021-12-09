
 
<?php
include("db.php");
$getid = $_GET&#91;'edit'&#93;;
$seledittwo = "SELECT * FROM `insertdeleteedit` WHERE `id` = '$getid'";
$qry = mysqli_query($connect, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$id = $selassoc&#91;'id'&#93;;
$firstname = $selassoc&#91;'firstname'&#93;;
$lastname = $selassoc&#91;'lastname'&#93;;
$email = $selassoc&#91;'email'&#93;;
if(isset($_POST&#91;'updateedit'&#93;)) {
 $upid =  $_POST&#91;'upid'&#93;;
 $upfirstname =  $_POST&#91;'upfirstname'&#93;;
 $uplastname =  $_POST&#91;'uplastname'&#93;;
 $upemail =  $_POST&#91;'upemail'&#93;;
 
 
 $seleditt = "UPDATE `insertdeleteedit` SET `firstname`='$upfirstname',`lastname`='$uplastname',`email`='$upemail' WHERE `id` = '$upid'";
 $qry = mysqli_query($connect,$seleditt);
 if($qry) {
  header("location: display.php");
 }
}
 
//$seledit = "UPDATE `insertdeleteedittable` SET `id`=&#91;value-1&#93;,`firstname`=&#91;value-2&#93;,`lastname`=&#91;value-3&#93;,`email`=&#91;value-4&#93; WHERE `id` = '$getid'";
 
?>
 
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<form method="POST" action="">
   <input type="text" name="upid" value="<?php echo $id; ?>"><br><br>
 <input type="text" name="upfirstname" value="<?php echo $firstname; ?>"><br><br>
 <input type="text" name="uplastname" value="<?php echo $lastname ; ?>"><br><br>
 <input type="text" name="upemail" value="<?php echo $email; ?>"><br><br>
 <input type="submit" name="updateedit" value="Update">
</form>
</body>
</html>
 

 
