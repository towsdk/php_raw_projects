<?php 

require_once '../../db.php';

$id = $_GET['id'];
// seelct users 
if((int)$id && !empty($id) ){
   
    $query = "SELECT * FROM services WHERE id = $id ";
    $result = mysqli_query($conn, $query);
   
    
    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);
        
    }

}



// update user

if(isset($_POST['submit'])){
    $error = [];
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $icon = trim(htmlentities($_POST['icon']));
    $url = trim(htmlentities($_POST['url']));
    $icon_box = trim(htmlentities($_POST['icon_box']));
  
    if(empty($title)){
        $error["titleErr"] =  "First Name Field is Empty!";
        echo $error["titleErr"];
    }

    // insert all data 

    if(empty($error )){

        $updateQuery = "UPDATE services SET title='$title',description='$description',icon='$icon',url='$url',icon_box='$icon_box' WHERE id = $id";

        $updateResult = mysqli_query($conn, $updateQuery );
        if($updateResult){
            $success = "update Successfull!";
            header("location:serviceIndex.php");
        }

    }

};
require_once '../inc/header.php';
?>


<section class="mt-5">
  <div class="container">
    <div class=" row justify-content-center">
        <div class="col-lg-8">
        <div class="card">
            <div class="card-heaer">
                <h3 class="header">Edit User</h3>
            </div>
            <div class="card-body" >
                <form action="" method="POST" enctype="multipart/form-data" >
                   
                    <div class="mb-3">
                        <label class="form-label">Enter your first Title: </label>
                        <input name="title" type="text" class="form-control"
                        value="<?=$data['title'];?>" >
                        <?php
                        if (isset($error["titleError"])){
                            // echo $error["titleError"];
                          printf('<p class="text-danger"> %s</p>',$error["titleError"]);
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your Description: </label>
                        <input  name="description" type="text" class="form-control"
                        value="<?=$data['description'];?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your Icon: </label>
                        <input  name="icon" type="text" class="form-control"
                        value="<?=$data['icon'];?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your Url: </label>
                        <input  name="url" type="text" class="form-control"
                        value="<?=$data['url'];?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your Icon_box: </label>
                        <input  name="icon_box" type="text" class="form-control"
                        value="<?=$data['icon_box'];?>" >
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
require_once '../inc/footer.php';
?>