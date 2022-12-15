<?php
session_start();
require_once '../../db.php';
$error = [];

if(isset($_POST['submit'])){

    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $icon = trim(htmlentities($_POST['icon']));
    $url = trim(htmlentities($_POST['url']));
    $icon_box = trim(htmlentities($_POST['icon_box']));

    if(empty($title)){
        $error['titleErr']= "Title is empty";
        echo $error['titleErr'];
    }
    if(strlen($title)>50){
        // $_SESSION['length']= 
        $error['titleeExcessErr']= strlen($title)." is Your character length is:Please give less than 50 character";
    }
    if(strlen($description)>100){
        $error['descErr']= strlen($title)."Please give less than 100 character";
    }

    if(empty($error)){
        $query = "INSERT INTO services(title, description, icon, url, icon_box)
        VALUES ('$title', '$description', '$icon','$url', '$icon_box')";

        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['sersuccess']="Service create successfully";
            header("location: serviceIndex.php");
        }
    }else{
        $_SESSION['error']=$error;
        header('location: addservice.php');
    }
}
?>