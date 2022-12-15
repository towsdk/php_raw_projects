<?php
require_once '../inc/header.php';
require_once '../../db.php';
$query = "SELECT * FROM banner";
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
                        aria-current="page">All Banner</li>
                </ol>
            </nav>
            <h1 class="m-0">All Banner</h1>
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
                        <th>Title</th>
                        <th>Description</th>
                        <th>Button Text</th>
                        <th>Button Url</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                        <tbody>
                        <?php
                        foreach($datas as $data){
                        ?>
                        <tr>
                            <td ><?=$data['id']?></td>
                            <td><?=$data['title']?></td>
                            <td><?=substr($data['description'], 0, 50).'...'?></td>
                            <td><?=$data['btn_txt']?></td>
                            <td><?=$data['btn_url']?></td>
                            <td>
                            <span class="badge <?=$data['status']==1? "bg-success":"bg-warning";?>">
                                <?=$data['status']==1? "Active":"Deactive";?>
                            </span>
                            </td>
                            <td>
                            <a href="edit.php?id=<?= $data['id'];?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="view.php?id=<?=$data['id'];?>" class="btn btn-sm btn-success">View</a>
                            <a href="delete.php?id=<?=$data['id'];?> " class="btn btn-sm btn-success">Delete</a>
                            <a href="status.php?id=<?=$data['id'];?>" class="btn btn-sm <?=$data['status']==1? "btn-warning":"btn-success";?>">
                        <?=$data['status']==1? "Deactive":"Active";?></a>
                        </td>
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