<?php 

require_once '../../db.php';

$id = $_GET['id'];
// seelct users 
if((int)$id && !empty($id) ){
   
    $query = "SELECT * FROM banner WHERE id = $id ";
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
    $btn_txt = trim(htmlentities($_POST['btn_txt']));
    $btn_url = trim(htmlentities($_POST['btn_url']));
  
  
    if(empty($title)){
        $error["titleErr"] =  "First Name Field is Empty!";
        echo $error["titleErr"];
    }

    // insert all data 

    if(empty($error )){

        $updateQuery = "UPDATE banner SET title='$title',description='$description',btn_txt='$btn_txt',btn_url='$btn_url' WHERE id = $id";

        $updateResult = mysqli_query($conn, $updateQuery );
        if($updateResult){
            $success = "update Successfull!";
            header("location:bannerIndex.php");
        }

    }else{
        header("location:edit.php?id=<?= $id;?>");
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
                        <label class="form-label">Enter Button text: </label>
                        <input  name="btn_txt" type="text" class="form-control"
                        value="<?=$data['btn_txt'];?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter Button Url: </label>
                        <input  name="btn_url" type="text" class="form-control"
                        value="<?=$data['btn_url'];?>" >
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