<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"type="text/css" href="css/bootstrapt.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php 

session_start();

    $idd = $_SESSION['idd'] ;


    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "basa";
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
     die('Connect Error ('. mysqli_connect_errno() .') '
     . mysqli_connect_error());
     }

     $sql= "select * from home where owenerid =$idd ";
 

 $resa = mysqli_query($conn,$sql);
 $nm= mysqli_fetch_assoc($resa);




    $usern = $nm['owenerid'];
    $place = $nm['place'];
    $price = $nm['price'];
    ?>
    <title>Book This Home</title>
</head>
<body>
         <nav>
        <div class="logo">
            <a href="index.php" style="    text-decoration: none;
            "><h4>BASA</h4></a>
        </div>
        
            <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="help.html">Help</a></li>
            <li><a href="profile.php"><?php echo $usern; ?></a></li>
</nav>


<img src="profile.jpeg" alt="" width="100%">
 <br> <br>          
   <div style="display:flex ; justify-content: space-around;">

   

    <div style="align-self:center ;background-color:#b7c5f1;    width:500px;
    height: 300px;
    border-radius: 4px;
    text-align: center;
    position: relative;">
    <div class="card">
        <br><br>
        <h2>Book This Home</h2>
    <form method="post" action="book.php">
        <h3 style="text-align:left; margin-left:15%;">Start Date</h3>
            <input type="date" placeholder="Place" name="startdate">
            <h3 style="text-align:left; margin-left:15%;">End Date</h3>
            <input type="date" placeholder="date()"name="enddate"> 
            <a href="login.php"><input type="submit" class="button" value="Confirm"></a>        
        </form>
    
    </div></div>
    <div style="align-self:right ;background-color:#b7c5f1;    width:500px;
    height: 300px;
    border-radius: 4px;
    text-align: center;
    position: relative;">
    <div class="card">
    <img src="blackho.png" alt="" style="width:150px ; height:auto ;">
    <h1>Address : <?php echo $place; ?></h1>
    <p class="title">Price : <?php echo $price; ?></p>
    </div></div>


    


</div>



    </div>
</body>
</html>