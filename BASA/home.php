<?php
session_start();
if (empty($_SESSION['reg_email'])) {
 	header('Location:login_today.php');
 } 
 

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<h1> Welcome to my home page</h1>
<a href="logout.php">LOGOUT</a>
</body>
</html>