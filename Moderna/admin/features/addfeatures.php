<?php
require_once '../inc/header.php';
?>
<div class="container-fluid page__heading-container">
                            <div class="page__heading d-flex align-items-end">
                                <div class="flex">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                            <li class="breadcrumb-item active"
                                                aria-current="page">Add features</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Add features</h1>
                                </div>
                            </div>
    </div>

    <div class="container-fluid page__container">

    <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Default Forms</strong></p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <form method="POST" action="featureInsert.php" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Add features">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control" name="description" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Photo</label>
                                                <input type="file" class="form-control" name="photo" placeholder="Enter Photo">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>

    </div>
<?php
require_once '../inc/footer.php';
?>