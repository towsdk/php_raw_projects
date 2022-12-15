<?php
session_start();
require_once "../../db.php";
$error = [];

if(isset($_POST['submit'])){

    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $file = $_FILES['photo'];
    
    if(empty($error)){
        $imageEx = explode('.', $file['name']);
        $imageName = time().'.'.end($imageEx);

       $fielUpload = move_uploaded_file($file['tmp_name'], "../../uploads/features/". $imageName);

       if($fielUpload){
        $query = "INSERT INTO features(title, description, photo) VALUES ('$title', '$description', '$imageName')";
        $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['fsuccess']= "Result is successfull";
        header("location: index.php");
       }
    }
    }
}
?>