<?php
session_start();

if(!isset($_SESSION['login_user'])){
    header('location: sign-in.php');
}
if(!isset($_COOKIE['login_user'])){
    header('location: sign-out.php');
}
setcookie('login_user', 'yes', time()+60, '/');
require_once 'common/config.php';


//this is for query run
$query = "SELECT id,lname,fname,email,status,photo FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0){
    $users1= mysqli_fetch_all($result, true);
}

require_once('common/header.php');

// print_r($_SESSION['login_user']);
?>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>All users</h2>
                <table class="table table-hover table-striped">
                    <tr class="table-dark">
                        <th>Id</th>
                        <th>Photo</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach($users1 as $key=>$user){
                    ?>
                    <tr>
                        <td><?= $user['id'];?></td>
                        <td>
                            <img src="photofolder/profile/<?= $user['photo'];?>"alt="<?= $user['fname'];?>" width="80px">
                        </td>
                        <td><?= $user['fname'];?></td>
                        <td><?= $user['lname'];?></td>
                        <td><?= $user['email'];?></td>
                        <td>
                            <span class="badge <?=$user['status']==0? "bg-success":"bg-warning";?>">
                                <?=$user['status']==0? "Active":"Deactive";?>
                            </span>
                        </td>
                        <td>
                            <a href="edit.php?id=<?= $user['id'];?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="view.php?id=<?=$user['id'];?>" class="btn btn-sm btn-success">View</a>
                            <a href="delete.php?id=<?=$user['id'];?> " class="btn btn-sm btn-success">Delete</a>
                            <a href="status.php?id=<?=$user['id'];?>" class="btn btn-sm <?=$user['status']==0? "btn-warning":"btn-success";?>">
                        <?=$user['status']==0? "Deactive":"Active";?></a>
                        </td>
                    </tr>
                <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
require_once('common/footer.php');
?>