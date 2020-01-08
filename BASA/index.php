

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"type="text/css" href="css/bootstrapt.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
    table , tr , th , td 
{
        border: 1px solid black;
        text-align: center;
        align-self: center;
        align-items: center;
        justify-content: center;
        align : center;
}
    </style>
    <title>Welcome To BASA</title>
</head>
<body>
    <?php
   session_start();
   session_destroy();
   $host = "localhost";
   $dbusername = "root";
   $dbpassword = "";
   $dbname = "basa";
   
   $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
   if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }

   ?>
    
    <nav>
<div class="logo">
    <a href="index.php" style="    text-decoration: none;
    "><h4>BASA</h4></a>
</div>

<ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="help.html">Help</a></li>
    <li><div class="popbtn" id="btnsign">Sign Up</div></li>
    <li><div class="popbtn" id="btnlo">Login</div></li>
</ul>
</nav>
<div class="head1">Welcome To BASA</div>
<img src="homess.jpeg" alt="" width="100%">
 <br> <br>

    <div class="head2">Search For Places</div>
    <div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
				
                <?php 
        
        if(isset($_POST['search'])){
            $searchkey = $_POST['search'] ;
            $sql= "select * from home where place like '%$searchkey%' ";
        }
        else
        {
            
            $sql= "select * from home";
            $searchkey = "";
        }

        


        $resa = mysqli_query($conn,$sql);

        ?>
        
                <form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo $searchkey ?> > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>Owenerid</th>
						<th>Place</th>
						<th >Price</th>
					</tr>

                    <?php while($row = mysqli_fetch_object($resa)){  ?>
					<tr>
						<td> <?php echo $row->owenerid ?> </td>
						<td> <?php echo $row->place ?> </td>
						<td>  <?php echo $row->price ?> </td>
					</tr>
                    <?php } ?>
				</table>
			</div>
		</div>
	</div>

    <div class="head2">Please Login To Book Paying Guest</div>

       
<div class="pop">
    <div class="pops">
        <div class="close">+</div>
        <img src="user.png" height="100px" width="100px">
        <form method="post" action="log.php">
            <input type="text" placeholder="E-Mail" name="email">
            <input type="Password" placeholder="Password"name="pass"> 
            <a href="log.php"><input type="submit" class="button" value="Login"></a>        
        </form>
    </div>
</div>
<div class="popsign">
        <div class="popsi">
            <div class="close1">+</div>
            <img src="user.png" height="100px" width="100px">
            <form method="post" action="sign.php">
                <input type="text" placeholder="User Name" name="username">
                <input type="text" placeholder="E-Mail" name="email">
                <input type="Password" placeholder="Password" name="password"> 
                <input type="Password" placeholder="Retype Password" name="password1"> 
                <input type="submit" class="button" 
                name="submit1" value="Sign Up">
            </form>
        </div>
    </div>



 
        
<script>
document.getElementById('btnlo').addEventListener('click',function(){
document.querySelector('.pop').style.display="flex";
});
document.querySelector('.close').addEventListener("click",function(){
    document.querySelector('.pop').style.display="none";
}) ;

document.getElementById('btnsign').addEventListener('click',function(){
document.querySelector('.popsign').style.display="flex";
});

document.querySelector('.close1').addEventListener("click",function(){
    document.querySelector('.popsign').style.display="none";
}) ;


</script>





</body>
</html>   