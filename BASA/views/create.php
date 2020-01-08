<?php
require_once '../database/config.php';
require_once "../functions/Controllers.php";
//session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  $ob -> login();
  //exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="../functions/Controllers.php?create=1" method="post">
                        <div class="form-group <?php echo (!empty($ob->name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $ob->name; ?>">
                            <span class="help-block"><?php echo $ob->name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($ob->address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?php echo $ob->address; ?></textarea>
                            <span class="help-block"><?php echo $ob->address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($ob->salary_err)) ? 'has-error' : ''; ?>">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $ob->salary; ?>">
                            <span class="help-block"><?php echo $ob->salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
