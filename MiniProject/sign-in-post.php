<?php
session_start();
require_once 'common/config.php';
$error= [];

if(isset($_POST['submit'])){
$email = trim(htmlentities($_POST["email"]));
$password1= trim(htmlentities($_POST["password"]));
$password=md5($password1);


$query ="SELECT email,password FROM users WHERE email='$email' AND password ='$password' ";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0){
    header("location: allusers.php");
    $user = mysqli_fetch_assoc($result);
    unset($user['password']);
    $_SESSION['login_user'] = $user;
    setcookie('login_user', 'yes', time()+60, '/');
}else{
  header('location: sign-in.php');  
}

}
?>