<?php
session_start();

if(!isset($_SESSION['login_user'])){
    header('location: sign-in.php');
}
require_once'common/config.php';
require_once'common/header.php';

$id= $_GET['id'];
if((int)$id && !empty($id)){
    // this is for connection


$query ="SELECT id,fname,lname,email,photo FROM users WHERE id=$id";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0){
    $user= mysqli_fetch_assoc($result);
}
}
?>
<section class="mt-5">
  <div class="container">
    <div class=" row justify-content-center">
        <div class="col-lg-8">
        <div class="card">
            <div class="card-heaer">
                <h3 class="header center" >View Page</h3>
            </div>
            <div class="card-body" >
                <table class="table">
                    <tr>
                        <td></td>
                        <td></td>
                          <td>  <img src="photofolder/profile/<?= $user['photo'];?>"alt="<?= $user['fname'];?>" width="180px" class="center">
</td>   

                    </tr>

                    <tr>
                        <td>Id</td>
                        <td>:</td>
                        <td><?=$user['id'];?></td>
                    </tr>
                    <tr>
                        <td>Fname</td>
                        <td>:</td>
                        <td><?=$user['fname'];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?=$user['email'];?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
  </div>
</section>

<?php
require_once('common/footer.php');
?>