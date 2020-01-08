<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <!--<script type="text/javascript">
      $(document).ready(function () {
        $("#subBtn").click(function () {
          var data = $("form").serialize();
            $.post('ajax.php', data, function (res) {
              if(res.success){
                window.location = "index.php";
              }else{
                $(".err-msg").show();
                $(".err-msg strong").text(res.msg);
              }
            }, 'json');
        });
      });
    </script>-->
</head>
<body>
    <div class="wrapper">
      <div class="alert alert-danger alert-dismissible err-msg" role="alert" style="display:none">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong></strong>
      </div>
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="../functions/Controllers.php" method = "post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" id = "userN" value="">
                <span class="help-block"><?php //echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" id = "pWord" class="form-control">
                <span class="help-block"><?php// echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" id = "subBtn" class="btn btn-primary" value="Submit">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>
