<?php
require_once '../inc/header.php';
require_once '../../db.php';

$query = "SELECT * FROM why_us";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
    $data = mysqli_fetch_assoc($result);
}
?>
<div class="container-fluid page__heading-container">
                            <div class="page__heading d-flex align-items-end">
                                <div class="flex">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                            <li class="breadcrumb-item active"
                                                aria-current="page">Why Us</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Why Us</h1>
                                </div>
                            </div>
    </div>

    <div class="container-fluid page__container">

    <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Default Forms</strong></p>
                                        <p class="text-muted">FlowDash supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please <a href="https://getbootstrap.com/docs/4.1/components/forms/" target="_blank">read the official documentation</a> for a full list of options from Bootstrap's core library.</p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <form method="POST" action="updatewhyus.php" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label >Photo</label>
                                                <input type="file" name="file" class="form-control mb-3" value="<?=$data['photo'];?>" placeholder="Add Banner">
                                                <img src="../../uploads/why_us/<?=$data['photo'];?>" alt="" class="src" width="100">
                                            </div>
                                            <div class="form-group">
                                                <label>Video Link</label>
                                                <input type="text" class="form-control" name="video_link" value="<?=$data['video_link'];?>" placeholder="Enter your Link">
                                            </div>
                                            <div class="form-group">
                                                <label>Title One</label>
                                                <input type="text" class="form-control" name="title_1" value="<?=$data['title_1'];?>" placeholder="Enter your title">
                                            </div>
                                            <div class="form-group">
                                                <label>Description One</label>
                                                <textarea type="text" class="form-control" name="description_1" value="" placeholder="Enter your Your description"><?=$data['description_1'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Icon One</label>
                                                <input type="text" class="form-control" name="icon_1" value="<?=$data['icon_1'];?>" placeholder="Enter your Your Icon one">
                                            </div>
                                            <div class="form-group">
                                                <label>Title Two</label>
                                                <input type="text" class="form-control" name="title_2" value="<?=$data['title_2'];?>" placeholder="Enter your title">
                                            </div>
                                            <div class="form-group">
                                                <label>Description Two</label>
                                                <textarea type="text" class="form-control" name="description_2" value="" placeholder="Enter your Your description"><?=$data['description_2'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Icon Two</label>
                                                <input type="text" class="form-control" name="icon_2" value="<?=$data['icon_2'];?>" placeholder="Enter your Your Icon one">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>

    </div>
<?php
require_once '../inc/footer.php';
?>