<?php

$db = mysqli_connect("localhost","root"," ","students");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>