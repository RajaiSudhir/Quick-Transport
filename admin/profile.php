<?php
    include("header.php");

?>


<body>
    <style>
          .avatar {
			vertical-align: middle;
			width: 300px;
			height: 300px;
			border-radius: 50%;
            border: 2px groove blue;
		}

    </style>

    <section class="sample-page">
      <div class="container">
        <br/>
    <form action='profileupdate.php' method='post'>
<?php 
    
    // @$mail=$_SESSION['user'];
     $table=mysqli_query($conn,"select * from admin_login");
     $row=mysqli_fetch_array($table);

     
        
         echo"       
    
        
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
                    <span class='input-group-text' data-bs-toggle='tooltip' data-bs-title='Your account password'>Old Password</span>
                    <input type='password' aria-label='First name' name='pass' class='form-control'>
                    
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
        </div>"; ?>
      </div>
    </section>

  </main><!-- End #main -->

 
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
    </form>
</body>

</html>