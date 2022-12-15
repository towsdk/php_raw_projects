<?php
session_start();
require_once 'common/config.php';
$error = []; 
if(isset($_POST["submit"])){

$fname= trim(htmlentities($_POST["fname"]));
$lname = trim(htmlentities($_POST["lname"]));
$email = trim(htmlentities($_POST["email"]));
$password1= trim(htmlentities($_POST["password"]));
$password=md5($password1);
$photo = $_FILES["photo"];

if(empty($fname)){
    $error["fnameError"]= "First name Error";
}
if(empty($lname)){
    $error["lnameError"]= "Last name Error";
}
if(empty($email)){
    $error["emailError"]= "Email Error";
}
if(empty($password)){
    $error["passwordError"]= "Password Error";
}
if(empty($photo['name'])){
    $error["fileError"]= "Photo Error";
}
$photoType = ['jpeg', 'jpg', 'png', 'gif'];
$photoEx = explode('.', $photo['name']);
$typeCheck = in_array(strtolower(end($photoEx)), $photoType);

if(empty($photo['name'])){
    $error['photoErr'] = "select your photo";
}else if($typeCheck===false){
    $error['photoTypeErr']= "Select Valid photo";
}else if($photo['size'] >= 2000000){
    $error['photoSizeErr']= "Upload lower than 2Mb";
}

if(empty($error)){
    $photoName = $fname.'-'. uniqid().'.'.end($photoEx);
    $uploadphoto = move_uploaded_file($photo['tmp_name'], 'photofolder/profile/'. $photoName);
    $query = "INSERT INTO `users` VALUES ('','$fname','$lname','$email','$password','$photoName','')";
    $result =mysqli_query($conn, $query);

    
if($result){
    $_SESSION['succcess']= "Data successfully iserted";
}else{
   $error= "file not upload successfull";
}
}else{
    $_SESSION['error']= $error;
}
}
header('location: sign-up.php');
?>