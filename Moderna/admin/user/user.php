<?php
require_once '../inc/header.php';
require_once '../../db.php';
$query = "SELECT id, name, description, email, password, photo, status FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0 ){
    $datas = mysqli_fetch_all($result, true);
}
?>
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active"
                        aria-current="page">Registerd Users</li>
                </ol>
            </nav>
            <h1 class="m-0">All User</h1>
        </div>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="row">
            <div class="col-12">
                <div class="table">
                    <table class="table myTable">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Email</th>
                        <th>photo</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                        <tbody>
                        <?php
                        foreach($datas as $data){
                        ?>
                        <tr>
                            <td><?=$data['id']?></td>
                            <td><?=$data['name']?></td>
                            <td><?=$data['description']?></td>
                            <td><?=$data['email']?></td>
                            <td><img src="../../assets/img/portfolio/<?=$data['photo']?>"alt="<?= $data['name'];?>" width="80px"></td>
                            <td><?=$data['status']?></td>
                        </tr>
                       <?php
                        }
                       ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once '../inc/footer.php';
    ?>