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
                                                aria-current="page">Add Banner</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Add Banner</h1>
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
                                        <form method="POST" action="bannerinsert.php">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Banner Title</label>
                                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Add Banner">
                                                <?php
                                                if(isset($_SESSION['error']['titleErr'])){
                                                    printf("<div class='alert alert-danger'>%s</div>",$_SESSION['error']['titleErr']);
                                                  ;
                                                }
                                                if(isset($_SESSION['error']['titleeExcessErr'])){
                                                    // printf("<div class='alert alert-danger'>%s</div>",$_SESSION['error']['titleErr']);
                                                    printf("<div class='alert alert-danger'>%s</div>",$_SESSION['error']['titleeExcessErr']);
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control" name="description" rows="10"></textarea>
                                                <?php
                                                if(isset($_SESSION['error']['descErr'])){
                                                    printf("<div class='alert alert-danger'>%s</div>",$_SESSION['error']['descErr']);
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Button Text</label>
                                                <textarea type="text" class="form-control" name="btn_txt" placeholder="Enter button text"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Button Url</label>
                                                <textarea type="text" class="form-control" name="btn_url" placeholder="Enter button text"></textarea>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>

    </div>
<?php
require_once '../inc/footer.php';
unset($_SESSION['error']);
?>