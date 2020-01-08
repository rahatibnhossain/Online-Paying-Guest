<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$password1 = filter_input(INPUT_POST, 'password1');
if (!empty($username)){
if (!empty($email)){
if (!empty($password)){
if (($password)==($password1)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "basa";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO userlist (username, pass , email   )
values ('$username','$password' , '$email')";
if ($conn->query($sql)){
header('Location:index.php')
; }
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
} 
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>