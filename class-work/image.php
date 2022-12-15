<?php

$error = []; 

$conn = mysqli_connect("localhost", "root", "", "towhid_new");

if(!$conn){
    echo "<script> alert('not connected');</script>";
    
    }
if(isset($_POST["button"])){



$fname= trim(htmlentities($_POST["fname"]));
$lname = trim(htmlentities($_POST["lname"]));
$email = trim(htmlentities($_POST["email"]));
$password= md5(($_POST["password"]));
$photo = $_FILES["photo"];




if(empty($fname)){
    $error["fnameError"]= "First name Error";
}
if(empty($lname)){
    $error["lnameError"]= "First name Error";
}
if(empty($email)){
    $error["emailError"]= "First name Error";
}
if(empty($password)){
    $error["passwordError"]= "First name Error";
}

$photoType = ['jpeg', 'jpg', 'png', 'gif'];
$photoEx = explode('.', $photo['name']);
$typeCheck = in_array(strtolower(end($photoEx)), $photoType);

if(empty($photo['name'])){
    $error['photoErr'] = "select your photo";
}else if($typeCheck===false){
    $error['photoTypeErr']= "Select Valid photo";
}else if($photo['size'] >= 2000000){
    $error['photoSizeErr']= "Upload lower than 2Mb";
}

if(empty($error)){
    $photoName = $fname.'-'. uniqid().'.'.end($photoEx);
    $uploadphoto = move_uploaded_file($photo['tmp_name'], 'photofolder/profile/'. $photoName);
    echo "phot upload successfully";
}



// $query = "INSERT INTO `myinfo`(`id`, `fname`, `lname`, `email`, `password`, `photo`, `status`) VALUES ('','$fname','$lname','$email','$password','$photo','')";
// mysqli_query($conn, $query);

$query = "INSERT INTO `users` VALUES ('','$fname','$lname','$email','$password','$uploadphoto','')";
mysqli_query($conn, $query);

echo '<script>alert( "Data insert successfully")</script>';
}

print_r($error);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My own demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <section class="mt-5">
  <div class="container">
    <div class=" row justify-content-center">
        <div class="col-lg-8">
        <div class="card">
            <div class="card-heaer">
                <h3 class="header">Php Form</h3>
            </div>
            <div class="card-body" >
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Enter your first name: </label>
                        <input name="fname" type="text" class="form-control" >
                        <?php
                        if (isset($error["fnameError"])){
                            // echo $error["fnameError"];
                          printf('<p class="text-danger"> %s</p>',$error["fnameError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your last name: </label>
                        <input  name="lname" type="text" class="form-control" >
                        <?php
                        if (isset($error["lnameError"])){
                            // echo $error["lnameError"];
                         printf('<p class="text-danger"> %s</p>',$error["lnameError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your Email: </label>
                        <input name="email" type="email" class="form-control" >
                        <?php
                        if (isset($error["emailError"])){
                            // echo $error["emailError"];
                            printf('<p class="text-danger"> %s</p>',$error["emailError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your password: </label>
                        <input name="password" type="password" class="form-control"  >
                        <?php
                        if (isset($error["passwordError"])){
                            // echo $error["passwordError"];
                            printf('<p class="text-danger"> %s</p>',$error["passwordError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload photo </label>
                        <input name="photo" type="file" class="form-control" >
                        <?php
                        if (isset($error["fileError"])){
                            // echo $error["fileError"];
                            printf('<p class="text-danger"> %s</p>',$error["fileError"]);
                        }
                        ?>
                    </div>
                    <button name="button" type="submit"  class="btn bg-danger" >Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
  </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" />
  </body>
</html>