<?php
session_start();

unset($_SESSION['login_user']);

session_destroy($_SESSION['login_user']);

header("location:../admin/index.php");
?>