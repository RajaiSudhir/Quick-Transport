<?php 
	include("header.php");
	$table=mysqli_query($conn,"select * from goods where lockstatus='Approve' and hire='Unhired'");
  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Load Market</title>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
</head>

<body>
    
  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Goods Loading</h2>
             <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> -->
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Load Market</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container">
        

            

       <form method="post">

          <?php  
              $i=1;
              
              echo "<div class='row'>";
              
              while($row=mysqli_fetch_array($table))
              {

                 
                  echo "<div class='col-6'>";
                  echo "<div class='card text-end' style='width: 600px;'>";
                  echo "<div class='card-body' style='border:3px solid lightblue'>";
                  echo "<h5 class='card-title'> $row[quan] $row[mname]</h5>";
                  echo "<div class='row'>
                          <div class='col-4 text-center'> <img class='img=fluid' height='80px' width='80px' style='margin-bottom:10px;' src='assets/img/boxes.png'>
                             <p class='card-text'>$row[vtype]</p>
                          </div>
                          <div class='col-4 text-center'>
                            <h4 class='card-text text-success'>$row[sloca]</h1>
                            <img src='assets/img/arrow.png' class='img-fluid' height='20px' width='20px'>
                            <h4 class='card-text text-danger'>$row[dloca]</h1>
                          </div>
                         <div class='col-4 text-center'> Price: 
                         <p class='card-text'>$row[rates]</p>";
             
                    
                    if(!empty($_SESSION['user'])){
                      echo"<a href='bidnow.php?id=$row[0]' class='btn btn-primary' name='bidnow'>Bid Now</a>";
                      
                    }
                    else
                       echo"<a href='register.html'><button type='button' class='btn btn-primary'  data-bs-toggle='modal'  data-bs-target='#exampleModal' data-bs-whatever='@fat'>Bid Now</button></a>";
                     echo"</form>";

                  echo "</div>";
                         
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";
                 
                  if($i%2==0)
                  {
                    echo "</div>";
                    echo "<div class='row mt-3'>";
                  }  
                  $i++;
                  


              }
              echo "</div>";


              




              //<a href='#' class='btn btn-primary'>Bid Now</a>
          ?>

        </form>       
      </div>
    </section>

  </main><!-- End #main -->

 <?php include("footer.html"); ?>

</body>

</html>