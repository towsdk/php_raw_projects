<?php
require_once 'common/config.php';

$id = $_GET['id'];
if((int)$id && !empty($id)){
    // this is for connection


$query ="DELETE FROM users WHERE id=$id";
$result = mysqli_query($conn, $query);

header('Location: allusers.php');

}

?>