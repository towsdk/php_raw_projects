<?php
session_start();
require_once "inc/header.php";
require_once "db.php";

//Banner data
$bannerQuery = "SELECT * FROM banner";
$bannerResult = mysqli_query($conn, $bannerQuery);
if(mysqli_num_rows($bannerResult)>0){
  $bannerData = mysqli_fetch_all($bannerResult, true);
}

//Service data
$servicesQuery = "SELECT * FROM services LIMIT 4";
$servicesResult = mysqli_query($conn, $servicesQuery);
if(mysqli_num_rows($servicesResult)>0){
  $servicesData = mysqli_fetch_all($servicesResult, true);
}

//whyUs update Data

// seelct users 

   
    $query = "SELECT * FROM why_us WHERE 1";
    $result = mysqli_query($conn, $query);
   
    
    if(mysqli_num_rows($result) > 0){
        $why_data = mysqli_fetch_assoc($result);
        
    }



//features data
$featuresQuery = "SELECT * FROM features LIMIT 4";
$featuresResult = mysqli_query($conn, $featuresQuery);
if(mysqli_num_rows($featuresResult)>0){
  $featuresData = mysqli_fetch_all($featuresResult, true);
}
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <?php
    foreach($bannerData as  $key => $bData){
       ?>
      <!-- Slide 1 -->
      <div class="carousel-item <?=$key == 0? 'active':'' ?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?=$bData['title'];?></h2>
          <p class="animate__animated animate__fadeInUp"><?=$bData['description'];?></p>
          <?php
          if(!empty($bData['btn_txt'])){
            printf("<a href='%s' class='btn-get-started animate__animated animate__fadeInUp'>%s</a>",$bData['btn_url'],$bData['btn_txt']);
            }
            ?>
              </div>
      </div>

      <?php
    }
    ?>

         <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <?php
          foreach($servicesData as $sData){
          ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box <?=$sData['icon_box'];?>">
              <div class="icon"><i class="bx <?=$sData['icon'];?>"></i></div>
              <h4 class="title"><a href="<?=$sData['url'];?>"><?=$sData['title'];?></a></h4>
              <p class="description"><?=$sData['description'];?></p>
            </div>
          </div>
          <?php }
          ?>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">


        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="uploads/why_us/<?=$why_data['photo'];?>" class="img-fluid" alt="">
            <a href="<?=$why_data['video_link'];?>" target="_blank" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"><?=$why_data['photo'];?></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx <?=$why_data['icon_1'];?>"></i></div>
              <h4 class="title"><a href=""><?=$why_data['title_1'];?></a></h4>
              <p class="description"><?=$why_data['description_1'];?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx <?=$why_data['icon_2'];?>"></i></div>
              <h4 class="title"><a href=""><?=$why_data['title_2'];?></a></h4>
              <p class="description"><?=$why_data['description_2'];?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

  
          <?php
          foreach($featuresData as $key =>$fData){
            if($key%2 == 0){
          ?>
          
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="uploads/features/<?=$fData['photo'];?>" class='img-fluid' alt="<?=$fData['title'];?>">
          </div>
          <div class="col-md-7 pt-4">
            <h3><?=$fData['title'];?></h3>
            <?=html_entity_decode($fData['description']);?>
          </div>
        </div>
            <?php
          }else{
            ?>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
          <img src="uploads/features/<?=$fData['photo'];?>" class="img-fluid" alt="<?=$fData['title'];?>">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3><?=$fData['title'];?></h3>
          <?=html_entity_decode($fData['description']);?>
          </div>
        </div>
        <?php 
            }
          }
          ?>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
<?php
require_once "inc/footer.php";