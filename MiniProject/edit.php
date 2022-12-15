<?php 
session_start();

if(!isset($_SESSION['login_user'])){
    header('location: sign-in.php');
}
 require_once 'common/config.php';
$id = $_GET['id'];


// seelct users 
if((int)$id && !empty($id) ){
   
    $query = "SELECT id, lname,fname,email,photo FROM users WHERE id = $id ";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
    }
}



// update user
$error = [];
if(isset($_POST['submit'])){

    $fname = trim(htmlentities($_POST['fname']));
    $lname = trim(htmlentities($_POST['lname']));
    $email = trim(htmlentities($_POST['email']));
    $photo = $_FILES['photo'];


    if(empty($fname)){
        $error["fnameErr"] =  "First Name Field is Empty!";
    }

    if(empty($lname)){
        $error["lnameErr"] = "Last Name Field is Empty!";
    }

    // insert image and remove old image 
    if($photo['name']){
        $photoEx = explode('.', $photo['name']);
        $photoName = $fname. '-'. uniqid().'.' .end($photoEx);

        $imagePath = "uploads/profile/". $user['photo'];
        if(file_exists($imagePath)){
            unlink($imagePath);
        }

        $uploadPhoto = move_uploaded_file($photo['tmp_name'], 'photofolder/profile/'. $photoName);

        $updateImageQuery = "UPDATE users SET photo = '$photoName'  WHERE id = $id";

        $updateImageResult = mysqli_query($conn, $updateImageQuery );
    }

    // insert all data 

    if(empty($error )){

        $updateQuery = "UPDATE users SET fname='$fname',lname='$lname',email='$email' WHERE id = $id";

        $updateResult = mysqli_query($conn, $updateQuery );
        if($updateResult){
            $success = "Insert Successfull!";
            header("location:allusers.php");
        }

    }

};




require_once 'common/header.php';

?>


<section class="mt-5">
  <div class="container">
    <div class=" row justify-content-center">
        <div class="col-lg-8">
        <div class="card">
            <div class="card-heaer">
                <h3 class="header">Edit User</h3>
            </div>
            <div class="card-body" >
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Enter your first name: </label>
                        <input name="fname" type="text" class="form-control"
                        value="<?= $user['fname'];?>" >
                        <?php
                        if (isset($error["fnameError"])){
                            // echo $error["fnameError"];
                          printf('<p class="text-danger"> %s</p>',$error["fnameError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your last name: </label>
                        <input  name="lname" type="text" class="form-control"
                        value="<?= $user['lname'];?>" >
                        <?php
                        if (isset($error["lnameError"])){
                            // echo $error["lnameError"];
                         printf('<p class="text-danger"> %s</p>',$error["lnameError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your Email: </label>
                        <input name="email" type="email" class="form-control"
                        value="<?= $user['email'];?>" >
                        <?php
                        if (isset($error["emailError"])){
                            // echo $error["emailError"];
                            printf('<p class="text-danger"> %s</p>',$error["emailError"]);
                        }
                        ?>
                    </div>
                    <!--  -->
                    <div class="mb-3">
                        <label class="form-label">Upload Photo </label>
                        <input name="photo" type="file" class="form-control" >
                        <?php
                        if (isset($error["fileError"])){
                            // echo $error["fileError"];
                            printf('<p class="text-danger"> %s</p>',$error["fileError"]);
                        }
                        ?>
                        <img class="mt-3" src="photofolder/profile/<?= $user['photo'];?>"alt="<?= $user['fname'];?>" width="80px">     
                      </div>
                    <button name="submit" type="submit"  class="btn bg-danger" >Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
  </div>
</section>

<?php
require_once('common/footer.php');
?>