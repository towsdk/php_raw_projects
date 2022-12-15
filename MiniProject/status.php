<?php
require_once 'common/config.php';

$id= $_GET['id'];

if((int)$id && !empty($id)){
    // this is for connection


$query ="SELECT id, status FROM users WHERE id=$id";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0){
    $user= mysqli_fetch_assoc($result);
}

if($user['status']==0){
    $updateStatusQuery = "UPDATE users SET status=1 WHERE id= $id";
    $updateStatusResult = mysqli_query($conn, $updateStatusQuery);
}else{
    $updateStatusQuery = "UPDATE users SET status=0 WHERE id= $id";
    $updateStatusResult = mysqli_query($conn, $updateStatusQuery);
}
header('location: allusers.php');
}