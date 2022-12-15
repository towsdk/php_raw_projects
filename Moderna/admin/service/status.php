<?php
require_once '../../db.php';

$id= $_GET['id'];

if((int)$id && !empty($id)){
    // this is for connection


$query ="SELECT id, status FROM services WHERE id=$id";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0){
    $user= mysqli_fetch_assoc($result);
}

if($user['status']==0){
    $updateStatusQuery = "UPDATE services SET status=1 WHERE id= $id";
    $updateStatusResult = mysqli_query($conn, $updateStatusQuery);
}else{
    $updateStatusQuery = "UPDATE services SET status=0 WHERE id= $id";
    $updateStatusResult = mysqli_query($conn, $updateStatusQuery);
}
header('location: serviceIndex.php');
}