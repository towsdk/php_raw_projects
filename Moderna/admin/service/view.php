<?php
session_start();

// if(!isset($_SESSION['login_user'])){
//     header('location: sign-in.php');
// }
require_once '../inc/header.php';
require_once '../../db.php';

$id= $_GET['id'];
if((int)$id && !empty($id)){
    // this is for connection


$query ="SELECT id,title,description,icon FROM services WHERE id=$id";
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
                        <td>Id</td>
                        <td>:</td>
                        <td><?=$user['id'];?></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>:</td>
                        <td><?=$user['title'];?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td><?=$user['description'];?></td>
                    </tr>
                    <tr>
                        <td>icon</td>
                        <td>:</td>
                        <td><?=$user['icon'];?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
  </div>
</section>

<?php
   require_once '../inc/footer.php';
?>