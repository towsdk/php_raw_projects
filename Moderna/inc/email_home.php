<?php
session_start();
require_once "../db.php";


    $error = [];
  $email = trim(htmlentities($_POST['email']));
  if(empty($email)){
    $error["emailError"]= "First name Error";
}
if(empty($error)){
  $sql = "INSERT INTO home_email (email) VALUES ('$email') ";
  $result = mysqli_query($conn, $sql);
  if($result){
    header("location: ../index.php");
  }else{
    echo "having problem";
  }
}

?>