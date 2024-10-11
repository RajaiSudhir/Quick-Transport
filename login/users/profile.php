<?php
    include("../../conn.php");
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile</title>
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
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/main.css" rel="stylesheet">
  <style>
    .avatar {
			vertical-align: middle;
			width: 300px;
			height: 300px;
			border-radius: 50%;
            border: 2px groove blue;
		}
        
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("head.php"); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('../../assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Profile</h2>
              
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Profile</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
    <form action='profileupdate.php' method='post' enctype="multipart/form-data">
        
    <section class="sample-page">
      <div class="container">
<?php 

     $mail=$_SESSION['user'];
     $table=mysqli_query($conn,"select * from register where email='$mail'");
     while($row=mysqli_fetch_array($table)){
        if($row['gender']=='male'){
            $gm="checked";
            $gf='';
        }
        else if($row['gender']=='female'){
            $gf="checked";
            $gm='';
        }
         echo"       
            <div class='row'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='text-center'>
                    <img src='$row[profileimg]' class='avatar' alt='...' />
                </div>        
            </div> 
            <div class='col-3'></div>
        </div>    
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>    
                <input class='form-control' name='photo' type='file' id='formFile'>
            </div> 
            <div class='col-3'></div>
        </div> 
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>Email</span>
                    <input type='text' aria-label='First name' value='$row[email]' name='email' class='form-control' disabled>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>First name</span>
                    <input type='text' aria-label='First name' value='$row[fname]' name='fname' class='form-control'>
                    <span class='input-group-text'>Last name</span>
                    <input type='text' aria-label='Last name' value='$row[lname]' name='lname' class='form-control'>
                    <input type='hidden' aria-label='Last name' value='$row[regid]' name='regid' class='form-control'>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>Business name</span>
                    <input type='text' aria-label='First name' value='$row[bname]' name='bname' class='form-control'>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>Aadhar Number</span>
                    <input type='text' aria-label='First name' value='$row[adhar]' name='adhar' class='form-control' disabled>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>GST Number</span>
                    <input type='text' aria-label='First name' value='$row[gst]' name='gst' class='form-control' disabled>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>Phone Number</span>
                    <input type='text' aria-label='First name' value='$row[pno]' name='pno' class='form-control'>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='form-check'>
                    <label class='form-check-label radio-inline px-3' for='flexRadioDefault1'>
                        <input class='form-check-input' type='radio'name='gender' $gm value='male'>Male
                    </label>
                    <label class='form-check-label radio-inline px-3' for='flexRadioDefault2'>
                        <input class='form-check-input' type='radio' name='gender' $gf value='female'>Female
                    </label>
                </div> 
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>Address</span>
                    <textarea aria-label='First name' name='uadd' class='form-control'>$row[uadd]</textarea>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>Wallet Address</span>
                    <input type='text' aria-label='First name' name='wallet' value='$row[wallet]' placeholder='Enter bank account number/UPI ID' class='form-control'>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text' data-bs-toggle='tooltip' data-bs-title='Your account password'>Password</span>
                    <input type='password' aria-label='First name' value='$row[pass]' name='pass' class='form-control'>
                    
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class='input-group'>
                    <span class='input-group-text'>State</span>
                    <input type='text' aria-label='First name' value='$row[state]' name='state' class='form-control'>
                </div>
            </div>
            <div class='col-3'></div>
        </div>
        <div class='row mt-3'>
            <div class='col-3'></div>
            <div class='col-6'>
                <input type='submit' name='save' value='Save Changes' class='btn btn-primary'/>
            </div>
            <div class='col-3'></div>
        </div>";} ?>
      </div>
    </section>

  </main><!-- End #main -->

 
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
  <?php include("footer.php"); ?>

</body>

</html>