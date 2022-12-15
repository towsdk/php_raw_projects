<?php
require_once '../inc/header.php';
require_once '../../db.php';

$query = "SELECT * FROM contact_show";
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
                                                aria-current="page">Add contact</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Add contact</h1>
                                </div>
                            </div>
    </div>

    <div class="container-fluid page__container">

    <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Contact Forms</strong></p>
                                        </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <form method="POST" action="updateContact.php">
                                        
                                            <div class="form-group">
                                                <label>Icon-1</label>
                                                <input type="text" class="form-control" name="icon_1" value="<?=$data['icon_1']?>" placeholder="Enter your Icon-1">
                                            </div>
                                            <div class="form-group">
                                                <label>Title-1</label>
                                                <input type="text" class="form-control" name="title_1" value="<?=substr($data['title_1'], 0, 50)?>" placeholder="Enter your Title-1">
                                            </div>
                                            <div class="form-group">
                                                <label>Address-1</label>
                                                <input type="text" class="form-control" name="address_1" value="<?=$data['address_1']?>" placeholder="Enter your Address-1">
                                            </div>
                                            <div class="form-group">
                                                <label>Icon-2</label>
                                                <input type="text" class="form-control" name="icon_2" value="<?=$data['icon_2']?>" placeholder="Enter your Icon-2">
                                            </div>
                                            <div class="form-group">
                                                <label>Title-2</label>
                                                <input type="text" class="form-control" name="title_2" value="<?=substr($data['title_2'], 0, 50)?>" placeholder="Enter your Title-2">
                                            </div>
                                            <div class="form-group">
                                                <label>Address-2</label>
                                                <input type="text" class="form-control" name="address_2" value="<?=$data['address_2']?>" placeholder="Enter your Address-2">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact-2</label>
                                                <input type="text" class="form-control" name="contact_2" value="<?=$data['contact_2']?>" placeholder="Enter your Contact-2">
                                            </div>
                                            <div class="form-group">
                                                <label>Icon-3</label>
                                                <input type="text" class="form-control" name="icon_3" value="<?=$data['icon_3']?>" placeholder="Enter your Icon-3">
                                            </div>
                                            <div class="form-group">
                                                <label>Title-3</label>
                                                <input type="text" class="form-control" name="title_3" value="<?=substr($data['title_3'], 0, 50)?>" placeholder="Enter your Title-3">
                                            </div>
                                            <div class="form-group">
                                                <label>Address-3</label>
                                                <input type="text" class="form-control" name="address_3" value="<?=$data['address_3']?>" placeholder="Enter your Address-3">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact-3</label>
                                                <input type="text" class="form-control" name="contact_3" value="<?=$data['contact_3']?>" placeholder="Enter your Contact-3">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>

    </div>
<?php
require_once '../inc/footer.php';
?>