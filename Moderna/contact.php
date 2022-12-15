<?php
session_start();
require_once "inc/header.php";
require_once "db.php";
//contact_show
$contact_showQuery = "SELECT * FROM contact_show";
$contact_showResult = mysqli_query($conn, $contact_showQuery);
if(mysqli_num_rows($contact_showResult)>0){
  $contact_showData = mysqli_fetch_all($contact_showResult, true);
}


//message box query


if(isset($_POST['submit'])){
  $error=[];
  $name = trim(htmlentities($_POST['name']));
  $email = trim(htmlentities($_POST['email']));
  $subject = trim(htmlentities($_POST['subject']));
  $message = trim(htmlentities($_POST['message']));
  
  if(empty($name)){
    $error['nameError']= "please enter your name";
  }

  if(empty($error)){
    $sql = "INSERT INTO contact_message(name, email, subject, message) VALUES ('$name','$email', '$subject', '$message') ";
    $result = mysqli_query($conn, $sql);
    if($result){
      header("location: contact.php");
    }else{
      $error['lastError']="last time error";
    }
  }
}
?>
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

        <?php
    foreach($contact_showData as  $key => $cData){
       ?>
          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx <?=$cData['icon_1'];?>"></i>
                  <h3><?=$cData['title_1'];?></h3>
                  <p><?=$cData['address_1'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx <?=$cData['icon_2'];?>"></i>
                  <h3><?=$cData['title_2'];?></h3>
                  <p><?=$cData['address_2'];?><br><?=$cData['contact_2'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx <?=$cData['icon_3'];?>"></i>
                  <h3><?=$cData['title_3'];?></h3>
                  <p><?=$cData['address_3'];?><br><?=$cData['contact_3'];?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>
        <?php
    }
    ?>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <?php
  require_once "inc/footer.php";
  ?>