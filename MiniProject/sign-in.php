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
                <form action="sign-in-post.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Enter your Email: </label>
                        <input name="email" type="email" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your password: </label>
                        <input name="password" type="password" class="form-control"  >
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
// unset($_SESSION['succcess']);
// unset($_SESSION['error']);
?>

