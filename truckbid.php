<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>[Template] Sample Inner Page</title>
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

  <!-- ======= Header ======= -->
  <?php
    include("header.php");
    $table=mysqli_query($conn,"select * from truck where id=$id");
    $row=mysqli_fetch_array($table);
  ?>
  
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Create Bid</h2>
              <p>Create yout bid now.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>bidnow</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <form method="post" action="truckinsert.php">
    
    
    <section class="sample-page">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class='col-4'></div>
            <div class="col-4 mt-3">
                <label for="formGroupExampleInput" class="form-label">Bid Price</label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="Bid Amount">
                <input type="hidden" name="trid" class="form-control" id="formGroupExampleInput" value="<?php echo $row['id']; ?>">
            </div>
            <div class='col-4'></div>
        </div>
        <div class='row'>
            <div class='col-4'></div>
            <div class="col-4 mt-3">
                <label for="formGroupExampleInput2" class="form-label">Material</label>
                <input type="text" class="form-control" name="material" id="formGroupExampleInput2" placeholder="Scrap,Salt,etc">
            </div>
            <div class='col-4'></div>
        </div>
        <div class='row'>
            <div class='col-4'></div>
            <div class="col-4 mt-3">
                <label for="formGroupExampleInput2" class="form-label">Quantity</label>
                <input type="text" name="quan" class="form-control" id="formGroupExampleInput2" placeholder="25 Tonne">
                <input type="hidden" name="email" value="<?php echo $row['username'] ?>">
                <input type="hidden" name="bmail" value="<?php echo $_SESSION['user'] ?>">

            </div>
            <div class='col-4'></div>
        </div>
        <div class='row'>
            <div class='col-4'></div>
            <div class='col-4 mt-3'>
                <label for="formGroupExampleInput2" class="form-label">Loading City</label>
            </div>
        </div>
        <div class='row'>
            <div class='col-4'></div>
            <div class="col-2 mt-3">
        
                <input type="text" name="lcity" class="form-control" id="formGroupExampleInput2" placeholder="Loading City">

            </div>
            <div class="col-2 mt-3">
                <input type="text" name="unlcity" class="form-control" id="formGroupExampleInput2" placeholder="Unloading City">

            </div>
            <div class='col-4'></div>
        </div>
        <div class='row'>
            <div class='col-4'></div>
            <div class="col-4 mt-3">
             <button type='submit' class='btn btn-primary' name='bidnow'>Create Bid Now</button>
            </div>
            <div class='col-4'></div>
        </div>
      </div>
    </section>
</form>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    include("footer.html");
  ?>
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