<?php
session_start();
include_once '../../db.php';


if(isset($_POST['submit'])){
    $error = [];
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $btn_txt = trim(htmlentities($_POST['btn_txt']));
    $btn_url = trim(htmlentities($_POST['btn_url']));

    if(empty($title)){
        $error['titleErr']= "Enter your title";
    }
    if(strlen($title)>50){
        // $_SESSION['length']= 
        $error['titleeExcessErr']= strlen($title)." is Your character length is:Please give less than 50 character";
    }
    if(strlen($description)>100){
        $error['descErr']= strlen($title)."Please give less than 100 character";
    }

    if(empty($error)){
        $query = "INSERT INTO banner(title, description, btn_txt, btn_url) VALUES ('$title', '$description', '$btn_txt', '$btn_url') ";

        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['bsuccess']="Banner successfully";
            header('location: bannerIndex.php');
        }

    }else{
        $_SESSION['error']=$error;
        header('location: addbanner.php');
    }
}
?>