<?php 
  include("../../conn.php");
  


  $u=$_SESSION["user"];
  $table=mysqli_query($conn,"select * from goods where username='$u' and hire='Unhired'");
  $truck=mysqli_query($conn,"select * from truck where username='$u' and hire='Unhired'");

  $goods=mysqli_query($conn,"select * from goods where username='$u' and hire='Hired'");
  $trucks=mysqli_query($conn,"select * from truck where username='$u' and hire='Hired'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Post Requests</title>
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

  <!-- Template Main CSS File -->
  <link href="../../assets/css/main.css" rel="stylesheet">


  <script>
    function remove(){
      var r=confirm("Are you sure to delete your post?");
      if(r==true)
        return true;
      else
        return false;

    }

  </script>
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
              <h2>Your Posts</h2>
             
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Post Requests</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container">
        <div class='row'>
          <div class='col-6 border border-primary' style='margin-right:0px;'>
            <div class='cols-4 table-responsive'>
              <table class="table table-striped">
                <tr><th colspan='7' class='text-center'>Unhired Goods</th></tr>
                <tr  class="table-dark">
                  <th>ID</th>
                  <th>Quantity</th>
                  <th>Material</th>
                  <th>Location</th>
                  <th>Action</th>
                  <th>Posted On</th>
                  <th>Hire Status</th>
                  </tr>
                <?php
                  while($row=mysqli_fetch_array($table)){
                    echo"<tr>";
                    echo"<td>$row[0]</td>";
                    echo"<td>$row[4]</td>";
                    echo"<td>$row[3]</td>";
                    echo"<td>
                      $row[1] $row[2]
                    </td>";
                    echo"<td><a href='goodsdelete.php?id=$row[0]' onclick='return remove()' class='btn btn-danger'>Delete</a></td>";
                    echo"<td>$row[postdate]</td>";
                    echo"<td>$row[hire]</td></tr>";
                }
                ?>
              </table>
            </div>
          </div>
      
          <div class='col-6 border border-primary'>
            <div class='cols-4 table-responsive'>
              <table class="table table-striped">
                <tr><th colspan='12' class='text-center'>Unhired Truck</th></tr>
                <tr class='table-dark'>
                <th>ID</th>
                <th>Truck Number</th>
                <th>Truck Type</th>
                <th>Location</th>
                <th>Truck Body</th>
                <th>Truck Tyre</th>
                <th>Truck Tonne</th>
                <th>Capacity</th>
                <th class='text-center'>Action</th>
                <th>Posted On</th>
                <th>Hire Status</th></tr>
                <?php
                  while($row=mysqli_fetch_array($truck)){
                    echo"<tr><td>
                      $row[0]
                    </td>";
                    echo"<td>
                      $row[1]
                    </td>";
                    echo"<td>
                      $row[4]
                    </td>";
                    echo"<td>
                      $row[2] $row[3]
                    </td>";
                    echo"<td>$row[tbody]$row[trbody]$row[cbody]$row[tanbody]</td>";
                    echo"<td>$row[ttyre]$row[htyres]</td>";
                    echo"<td>$row[ctonne24]$row[ctonne32]$row[ctonne32m]$row[htonne10]$row[htonne12]$row[htonne14]</td>";
                    echo"<td>$row[lcap]$row[tancap]</td>";
                    echo"<td class='text-center'><a href='truckdelete.php?id=$row[0]' onclick='return remove()' class='btn btn-danger'>Delete</a></td>";
                    echo"<td>$row[postdate]</td>";
                    echo"<td>$row[hire]</td></tr>";
                  }
                ?>
              </table>
            </div>
          </div>
        </div>
        <!-- Hired Post -->
        <div class='row mt-3'>
          <div class='col-6 border border-primary' style='margin-right:0px;'>
            <div class='cols-4 table-responsive'>
              <table class="table table-striped">
                <tr><th colspan='7' class='text-center'>Hired Goods</th></tr>
                <tr class="table-success">
                  <th>ID</th>
                  <th>Quantity</th>
                  <th>Material</th>
                  <th>Location</th>
                  <th>Posted On</th>
                  <th>Hire Status</th>
                  </tr>
                <?php
                  while($row=mysqli_fetch_array($goods)){
                    echo"<tr>";
                    echo"<td>$row[0]</td>";
                    echo"<td>$row[4]</td>";
                    echo"<td>$row[3]</td>";
                    echo"<td>
                      $row[1] $row[2]
                    </td>";
                    echo"<td>$row[postdate]</td>";
                    echo"<td>$row[hire]</td></tr>";
                }
                ?>
              </table>
            </div>
          </div>
      
          <div class='col-6 border border-primary'>
            <div class='cols-4 table-responsive'>
              <table class="table table-striped">
                <tr ><th colspan='12' class='text-center'>Hired Truck</th></tr>
                <tr class="table-success">
                <th>ID</th>
                <th>Quantity</th>
                <th>Material</th>
                <th>Location</th>
                <th>Truck Type</th>
                <th>Truck Tyre</th>
                <th>Truck Tonne</th>
                <th>Capacity</th>
                <th>Posted On</th>
                <th>Hire Status</th></tr>
                <?php
                  while($row=mysqli_fetch_array($trucks)){
                    echo"<tr><td>
                      $row[0]
                    </td>";
                    echo"<td>
                      $row[1]
                    </td>";
                    echo"<td>
                      $row[4]
                    </td>";
                    echo"<td>
                      $row[2] $row[3]
                    </td>";
                    echo"<td>$row[tbody]$row[trbody]$row[cbody]$row[tanbody]</td>";
                    echo"<td>$row[ttyre]$row[htyres]</td>";
                    echo"<td>$row[ctonne24]$row[ctonne32]$row[ctonne32m]$row[htonne10]$row[htonne12]$row[htonne14]</td>";
                    echo"<td>$row[lcap]$row[tancap]</td>";
                    echo"<td>$row[postdate]</td>";
                    echo"<td>$row[hire]</td></tr>";
                  }
                ?>
              </table>
            </div>
          </div>
        </div>
        <b>Note: KL represents Kilo Litre</b>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include("footer.php");    ?>
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

</body>

</html>