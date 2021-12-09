<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','students');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtYearGroup= $_POST['txtYeargroup'];
$txtmessage = $_POST['txtmessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`student_id`, `name`, `email`, `fldPhone`,`message`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtmessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>



