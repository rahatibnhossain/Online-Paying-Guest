<?php 

header('location: booking.php');
session_start();

$_SESSION['idd'] = $_GET['idd'];

?>