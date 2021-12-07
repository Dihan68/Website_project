<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
<head>
<title>Home Page</title>
</head>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</body>
<div class="container">

<a href= "logout.php">LOGOUT</a>

<h1>Welcome <?php echo$_SESSION['username']; ?> <h1>
<a href= "index.html">Please click to continue</a>
</div>
</body>

</html>