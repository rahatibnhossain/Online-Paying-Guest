<?php
$display = 'none';
if(!empty($_REQUEST)) {

	$name = $_REQUEST['name'];
	$roll = $_REQUEST['roll'];
	$dept = $_REQUEST['dept'];

	$con =mysqli_connect('localhost','root','','just-tup');
	$query = "INSERT INTO students (name,roll, dept) VALUES('$name', '$roll', '$dept')";
	$result = mysqli_query($con, $query);
	if($result) {
		$display = 'block';
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="alert alert-success text-center" role="alert"  style="display: <?php echo $display?>;"
	>Successfully Inserted.</div>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Register</h3>
	  </div>
	  <div class="panel-body">
	    	<form method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Roll</label>
				    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Roll" name="roll">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Dept</label>
				    <select class="form-control" name="dept">
				    	<option value="CSE">CSE</option>
				    	<option value="EEE">EEE</option>
				    	<option value="MATH">MATH</option>
				    </select>
				  </div>

				  <div class="col-md-4 col-lg-4"></div>
				  <div class="col-md-4 col-lg-4">
				  		<button type="submit" class="btn btn-success btn-block">Submit</button><br>
				  		<button  class="btn btn-block"><a href="log.php"> Done</a></button>
				</div>
			</form>
	  </div>
	</div>
</div>
</body>
</html>