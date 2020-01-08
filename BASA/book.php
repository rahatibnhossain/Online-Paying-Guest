<?php



$startdate = filter_input(INPUT_POST, 'startdate');
$enddate = filter_input(INPUT_POST, 'enddate');
session_start();

$usid = $_SESSION['idd'] ;

if (!empty($startdate)){
if (!empty($enddate)){


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
$sql = "INSERT INTO Bookilng (renterid, startdate , enddate   )
values ('$usid','$startdate' , '$enddate')";
if ($conn->query($sql)){

$upsts = "UPDATE userlist SET ckowner=1 WHERE id='$usid'";
$ress = mysqli_query($conn,$upsts);
    if($ress)
    { $status=1 ; 
        echo "New record is inserted sucessfully";
        $_SESSION['status'] = $status;
        $_SESSION['startdate'] = $startdate;
        $_SESSION['enddate'] = $enddate;

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
echo "enddate should not be empty";
die();
}
}
else{
echo "startdate should not be empty";
die();
}
?>