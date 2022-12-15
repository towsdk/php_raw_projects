<?php
require_once '../../db.php';

$id = $_GET['id'];
if((int)$id && !empty($id)){
    // this is for connection


$query ="DELETE FROM banner WHERE id=$id";
$result = mysqli_query($conn, $query);

header('Location: bannerIndex.php');

}

?>