<?php
include("db.php");
$getid = $_GET&#91;'deleteid'&#93;;
$sel = "DELETE FROM `insertdeleteedit` WHERE `id` = '$getid'";
$qry = mysqli_query($connect, $sel);
if($qry) {
 header("location: insertdeleteedit.php");
}
 
?>