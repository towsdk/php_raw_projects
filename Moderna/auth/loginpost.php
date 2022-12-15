<?php
session_start();
require_once '../db.php';
$error = [];

if(isset($_POST['submit'])){
    $email = trim(htmlentities($_POST['email']));
    $password1 = trim(htmlentities(($_POST['password'])));
    $password = md5($password1);

    if(empty($email)){
        $error['emailErr']= "Enter your email";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['emailErr']= "Email invalid";
    }
    if(empty($password1)){
        $error['passwordErr'] = "Enter your password";
    }

   
    $query ="SELECT * FROM users WHERE email='$email' AND password ='$password' ";
    $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) >0){
            header('location: ../admin/index.php');
           $user = mysqli_fetch_assoc($result);
            unset($user['password']);
            $_SESSION['login_user']= $user;
        }else{
            $error['matchError'] ="password and email not correct";
            $_SESSION['error']= $error;
            header('location: login.php');
        }
    }

?>