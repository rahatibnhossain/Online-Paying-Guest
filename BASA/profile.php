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

    $usern = $_SESSION['usern'];
    $place = $_SESSION['place'];
    $price = $_SESSION['price'];
    ?>
    <title>Profile of <?php echo $usern; ?> </title>
</head>
<body>
         <nav>
        <div class="logo";>
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
   <div style="display:flex ; justify-content: space-around;"> <div class="pops" style="align-items:left ;background-color:#b7c5f1;    width:500px;
    height: 300px;
    border-radius: 4px;
    text-align: center;
    position: relative;"">

    <div class="card">
    <img src="avatar.webp" alt="" style="width:150px ; height:auto ;">
    <?php 
    $email = $_SESSION['email'];
    ?>
    <h1>Name : <?php echo $usern; ?></h1>
    <p class="title">E-mail : <?php echo $email; ?></p>
    <h5>
    <?php 
    $status = $_SESSION['status'];
        if($status==0)
        {
            echo "Welcome Renter";
        }
        else{
            echo "Welcome Owner";
        }
    
    ?>
    </h5>
    </div></div>

   
   <?php   
    if($status==0)
    { 
    ?>
    <div style="align-self:right ;background-color:#b7c5f1;    width:500px;
    height: 300px;
    border-radius: 4px;
    text-align: center;
    position: relative;">
    <div class="card">
        <br><br>
        <h2>Rent Your House</h2>
    <form method="post" action="temp.php">
        <h3 style="text-align:left; margin-left:15%;">Place</h3>
            <input type="text" placeholder="Place" name="place">
            <h3 style="text-align:left; margin-left:15%;">Price</h3>
            <input type="number" placeholder="Price"name="price"> 
            <a href="login.php"><input type="submit" class="button" value="Confirm"></a>        
        </form>
    
    </div></div>


    <?php  } 
    else {


    ?>
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

    <?php } ?>




</div>



    </div>
</body>
</html>