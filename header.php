<?php include("conn.php"); ?>
<!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img height="150px" width="50px" src="assets/img/logo 2.png" alt="">
        <!-- <h1>Logis</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          
          <?php 
            if(empty($_SESSION['user'])){
                echo"
          
        
		  
		        <li class='dropdown'><a href='#'><span>User</span> <i class='bi bi-chevron-down dropdown-indicator'></i></a>
                <ul>
                    <li><a href='login/index.php'>Login</a></li>
              
                    <li><a href='register.html'>Register</a></li>
		        </ul> ";
            }
          ?>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              
              <li><a href="truckloading.php">Truck Loading</a></li>
              <li><a href="loadmarket.php">Good Loading</a></li>
			         <li><a href="#">Storage</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <?php 
                 if(!empty($_SESSION['user'])){
                    echo"

                        <li><a class='get-a-quote' href='login/users/profile.php'>Dashboard</a></li> ";
                 }
            ?>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <!-- End Header -->