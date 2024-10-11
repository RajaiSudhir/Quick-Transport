<?php 
	include("header.php");
	$table=mysqli_query($conn,"select * from truck where lockstatus='Approve' and hire='Unhired'");
  @$temp=mysqli_query($conn,"select bname from register where email='".$_SESSION['user']."'");
  $r=mysqli_fetch_array($temp);
  @$bsname=$r[0];
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lorry Market</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Truck Market</h2>
              <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> -->
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Truck Market</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    

    <section class="sample-page">
      <div class="container">
        <?php  
            $i=0;
            echo "<div class='row'>";
            while($row=mysqli_fetch_array($table))
            {
                if($row['truck']=="Truck")
                  $imgpath = "login/users/img/truck.jpg";
                else if($row['truck']=="Container")
                  $imgpath = "login/users/img/container.jpg";
                else if($row['truck']=="Trailer")
                  $imgpath = "login/users/img/trailer.png";
                else if($row['truck']=="Hyva")
                  $imgpath = "login/users/img/hyva.jpg";
                else if($row['truck']=="LCV")
                  $imgpath = "login/users/img/lcv.jpg";
                else if($row['truck']=="Tanker")
                  $imgpath = "login/users/img/tanker.jpg";
                echo "<div class='col-6'>";
                echo "<div class='card text-end' style='width: 600px;'>";
                echo "<div class='card-body' style='border:3px solid lightblue'>";
                echo "<p class='card-title' align='left' style='font-size:20px;'><b> $row[truck]</b></p>";
                
                @$fstate=strtok($row['vroute']," ");
                echo "<div class='row'>
                        
                        <div class='col-4 text-center'> <p class='card-text'>$row[vno]</p> <img class='img=fluid' height='100px' width='140px' style='margin-bottom:10px;' src='$imgpath'>
                          
                        </div>
                        <div class='col-4 text-center'>
                          <h4 class='card-text text-success'>$row[vloca]</h4>
                          <img src='assets/img/arrow.png' class='img-fluid' height='20px' width='20px'>
                          <h4 class='card-text text-success'>$fstate</h4>
                          
                        </div>
                       <div class='col-4 text-center'>  
                       
                       
                       </div>
                       
                      </div>
                        <h5 class='card-text' style='float:left;'>$bsname</h5>";
                        if(!empty($_SESSION['user'])){
                          echo"<a href='truckbid.php?id=$row[0]' class='btn btn-primary'>Bid Now</a>";}
                        else{
                          echo"<a href='register.html' class='btn btn-primary'>Bid Now</a>";}
                echo "</div>";
                echo "</div>";
                echo "</div>";
                $i++;
                if($i%2==0)
                {
                  echo "</div>";
                  echo "<div class='row mt-3'>";
                }  

            }
            echo "</div>";
        ?>
        




      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.html"); ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>