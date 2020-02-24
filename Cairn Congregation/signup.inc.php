<?php
   if(isset($_POST['submit-newaccount'])){
      
    
    require 'dbh.inc.php';

    $userName = $_POST['userid'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $repswd = $_POST['pswd2'];

    if(empty($userName) || empty($email) || empty($pswd) || empty($repswd)){
        header("Location: ../signup.php?error=emptyfields&userid=".$userName."&email=".$email);
        exit();
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL && !preg_match("/^[a-zA-Z0-9]*$/",$userName))){
        header("Location: ../signup.php?error=invalidemailuserid");
        exit();
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&userid=".$userName);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
        header("Location: ../signup.php?error=invalidemail&userid=".$email);
        exit();
    }
    else if ($pswd == $repswd){
        header("Location: ../signup.php?error=passwordcheck".$userName."&email=".$email);
        exit();

    }
    else{

        $sql = "SELECT UserNames From users WHERE UserNames=?";
        $stmt = mysqli_stmt_init($conn);
    }
}