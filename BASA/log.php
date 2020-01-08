 <?php

header('location: login.php');


 session_start();



    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'pass');
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;


?>