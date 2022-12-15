<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My own demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="app">
      <ul class="navbar-nav ms-auto">

      <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
      <?php
      if(isset($_SESSION['login_user']))
        {
      ?>
        <li class="nav-item">
          <a class="nav-link active" href="allusers.php">All Users</a>
        </li>
      <?php
        }
      if(!isset($_SESSION['login_user'])){
      ?>
      <li class="nav-item">
          <a class="nav-link" href="sign-up.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sign-in.php">Sign In</a>
        </li>
      <?php
      }
        if(isset($_SESSION['login_user'])){
        ?>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sign-out.php">Sign Out</a>
        </li>
       
       <?php 
       }
        ?>
    </div>
  </div>
</nav>
