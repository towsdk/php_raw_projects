<?php
session_start();
require_once '../db.php';
$error = [];

if(isset($_POST['submit'])){
    $name = trim(htmlentities($_POST['name']));
    $description = trim(htmlentities($_POST['description']));
    $email = trim(htmlentities($_POST['email']));
    $password1 = trim(htmlentities($_POST['password']));
    $password = md5($password1);
    $photo = $_FILES['photo'];
    
    if(empty($name)){
        $error['nameErr']= "Enter your name";
    }

    if(empty($email)){
        $error['emailErr']= "Enter your email";
    }

    if(empty($password1)){
        $error['passwordErr']= "Please Enter your password";
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

    $selectQuery = "SELECT email FROM users WHERE email = '$email' ";
    $selectResult = mysqli_query($conn, $selectQuery);

    if(mysqli_num_rows($selectResult)>0){
        $error['emailErr'] = "Email Already exist";
        $_SESSION['error']= $error;
        header('location: signup.php');
        exit();
    }elseif(empty($error)){
        
            $photoName = $name.'-'. uniqid().'.'.end($photoEx);
            $uploadphoto = move_uploaded_file($photo['tmp_name'], '../assets/img/portfolio/'. $photoName);
            $query = "INSERT INTO users(name, description, email, password, photo)
             VALUES ('$name','$description','$email','$password','$photoName')";
            $result = mysqli_query($conn, $query);
    
            if($result){
                $_SESSION['success']= "SignUp successfully done";
                header('location: login.php');
            }
        }else{
            $_SESSION['error']= $error;
            header('location: signup.php');
        }
    
    }

?>