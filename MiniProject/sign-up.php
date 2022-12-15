<?php
session_start();
if(isset($_SESSION['login_user'])){
    header('location: allusers.php');
}
require_once 'common/header.php';

?>

<section class="mt-5">
  <div class="container">
    <div class=" row justify-content-center">
        <div class="col-lg-8">
            <p>
                <?php
                if(isset($_SESSION['succcess'])){
                printf('<div class="alert alert-danger"> %s</div>', $_SESSION['succcess']);
                }
                ?>
            </p>
        <div class="card">
            <div class="card-heaer">
                <h3 class="header">Php Form</h3>
            </div>
            <div class="card-body" >
                <form action="sign-up-post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Enter your first name: </label>
                        <input name="fname" type="text" class="form-control" >
                        <?php
                        if (isset($_SESSION['error']["fnameError"])){
                           // echo $_SESSION['error']["fnameError"];
                          printf('<p class="text-danger"> %s</p>',$_SESSION['error']["fnameError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your last name: </label>
                        <input  name="lname" type="text" class="form-control" >
                        <?php
                        if (isset($_SESSION['error']["lnameError"])){
                           // echo $_SESSION['error']["lnameError"];
                         printf('<p class="text-danger"> %s</p>',$_SESSION['error']["lnameError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your Email: </label>
                        <input name="email" type="email" class="form-control" >
                        <?php
                        if (isset($_SESSION['error']["emailError"])){
                           // echo $_SESSION['error']["emailError"];
                            printf('<p class="text-danger"> %s</p>',$_SESSION['error']["emailError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your password: </label>
                        <input name="password" type="password" class="form-control"  >
                        <?php
                        if (isset($_SESSION['error']["passwordError"])){
                           // echo $_SESSION['error']["passwordError"];
                            printf('<p class="text-danger"> %s</p>',$_SESSION['error']["passwordError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Photo </label>
                        <input name="photo" type="file" class="form-control" >
                        <?php
                        if (isset($_SESSION['error']["fileError"])){
                           // echo $error["fileError"];
                            printf('<p class="text-danger"> %s</p>',$_SESSION['error']["fileError"]);
                        }
                        ?>
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
unset($_SESSION['succcess']);
unset($_SESSION['error']);
?>

