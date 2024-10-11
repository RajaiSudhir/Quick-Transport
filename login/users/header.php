<?php
	include("../../conn.php");
	if(empty($_SESSION['user']))
		header("location:../index.php");
	
?>
<html>
	<head>
	
	
	
	<style>
		li,a{
			padding-right:30px;
		}
	</style>
	
		  <meta charset="utf-8">
		  <meta content="width=device-width, initial-scale=1.0" name="viewport">

		  <title>User Dashboard</title>
		  <meta content="" name="description">
		  <meta content="" name="keywords">

		  <!-- Favicons -->
		  <link href="../../assets/img/favicon.png" rel="icon">
		  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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


		  
	</head>


	<body>
	
	
	
	
	
	<!-- ======= Header ======= -->
 
	<div class="container-fluid">
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar bg-danger">
        <ul>
          <li><a href="../../index.php">Home</a></li>
          <li><a href="about.php">Profile</a></li>
           <li class="dropdown"><a href="#"><span>Post</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="truck.php">Truck</a></li>
              
              <li><a href="post.php">Goods</a></li>
			  
		  </ul>
          
          
          <li><a href="../../contact.php">Contact</a></li>
		  
		  </ul>
		  <ul style="float:right">
		 <li class="dropdown"><a class="btn btn-warning" style="padding-right:30px" href="logout.php"><span>Logout</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
             
			  <li><?php  echo $_SESSION['user'];  ?></a></li>
		  </ul>
		  
		  
		 
        </ul>
      </nav><!-- .navbar -->

    </div>
 
  <!-- End Header -->
	
	
	
	
	<!-- Vendor JS Files -->
	  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
	  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	  <script src="assets/vendor/aos/aos.js"></script>
	  <script src="assets/vendor/php-email-form/validate.js"></script>
	  

	  <!-- Template Main JS File -->
	  <script src="assets/js/main.js"></script>
	 
	