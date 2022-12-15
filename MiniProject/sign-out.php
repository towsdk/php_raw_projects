<?php
session_start();
unset($_SESSION['login_user']);
session_destroy('login_user');

 header("location:sign-in.php");
?>