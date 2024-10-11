<?php
	include("../conn.php");
	if(empty($_SESSION['admin']))
		header("location:index.php");
	else{
		$user=$_SESSION['admin'];}

 

  $table=mysqli_query($conn,"select count(*) from goods where lockstatus='Disapprove'");
  $row=mysqli_fetch_array($table);
  $no=$row[0];

  $table1=mysqli_query($conn,"select count(*) from truck where lockstatus='Disapprove'");
  $row1=mysqli_fetch_array($table1);
  $no1=$row1[0];

  
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>
<header id="header" class="header d-flex align-items-center fixed-top" style="position:fixed;width:100%;margin-top:0px;padding-top:0px">
	  
	<nav id="navbar" class="navbar" style="background-color:black;width:100%">
        <ul>
          <li><a href="profile.php">Profile</a></li>
          
          <li><a href="users.php">Manage User</a></li>
		  
		   <li class="dropdown"><a href="#"><span>Service Requests</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="truckreq.php">Truck Request<span class="badge text-bg-secondary"><?php echo $no1; ?></span></a></li>
              
              <li><a href="goodsreq.php">Goods Request<span class="badge text-bg-secondary"><?php echo $no; ?></span></a></li>
		  </ul>
          
          <li class="dropdown"><a href="#"><span>Bid Requests</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="goodsbid.php">Goods Bid</a></li>
              <li><a href="truckbid.php">Truck Bid</a></li>
            </ul>
          </li>
          
          <li class="dropdown"><a href="#"><span>Hired</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="hgoods.php">Hired Goods</a></li>
              <li><a href="htruck.php">Hired Truck</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
		  <ul>
		  <li><font style="float:right;" color="white"><a style="border:5px double red;float:center;padding-right:25px" href="logout.php"> Logout </a></font></li>
		  <li>&nbsp;&nbsp;&nbsp;</li>
		 <li><font style="float:right;" color="white"> <?php echo $user; ?></font></li>
          
        </ul>
      </nav><!-- .navbar -->
	
</header>

