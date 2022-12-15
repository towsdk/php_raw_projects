<?php
session_start();
include_once '../../db.php';


if(isset($_POST['submit'])){
    $error = [];
    $icon_1 = trim(htmlentities($_POST['icon_1']));
    $title_1 = trim(htmlentities($_POST['title_1']));
    $address_1 = trim(htmlentities($_POST['address_1']));

    $icon_2 = trim(htmlentities($_POST['icon_2']));
    $title_2 = trim(htmlentities($_POST['title_2']));
    $address_2 = trim(htmlentities($_POST['address_2']));
    $contact_2 = trim(htmlentities($_POST['contact_2']));

    $icon_3 = trim(htmlentities($_POST['icon_3']));
    $title_3 = trim(htmlentities($_POST['title_3']));
    $address_3 = trim(htmlentities($_POST['address_3']));
    $contact_3 = trim(htmlentities($_POST['contact_3']));

    if(empty($title_1)){
        $error['titleErr']= "Enter your title";
    }

    if(empty($error)){
        $query = "UPDATE contact_show SET
        icon_1='$icon_1', title_1='$title_1', address_1='$address_1', icon_2='$icon_2', title_2='$title_2', address_2='$address_2', contact_2='$contact_2',
         icon_3='$icon_3', title_3= '$title_3', address_3='$address_3', contact_3='$contact_3' WHERE id=1";

        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['success']="User create successfully";
            header('location: contactIndex.php');
        }

    }
}
?>