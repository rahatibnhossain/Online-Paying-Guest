<?php

$place = filter_input(INPUT_POST, 'place');
$price = filter_input(INPUT_POST, 'price');
session_start();

$usid = $_SESSION['usid'] ;

if (!empty($place)){
if (!empty($price)){


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
$sql = "INSERT INTO Home (owenerid, place , price   )
values ('$usid','$place' , '$price')";
if ($conn->query($sql)){

$upsts = "UPDATE userlist SET ckowner=1 WHERE id='$usid'";
$ress = mysqli_query($conn,$upsts);
    if($ress)
    { $status=1 ; 
        echo "New record is inserted sucessfully";
        $_SESSION['status'] = $status;
        $_SESSION['place'] = $place;
        $_SESSION['price'] = $price;

    }
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

 
}
else{
echo "Price should not be empty";
die();
}
}
else{
echo "Place should not be empty";
die();
}
?>