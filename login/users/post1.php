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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
			<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

			<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



  <script>
		$(document).ready(function(){

			$("#tt1").hide();
			$("#tt2").hide();
			$("#tt3").hide();
			$("#tt4").hide();
			$("#tt5").hide();
			$("#tt6").hide();
		
			$("#t0").click(function(){
				$("#tt1").hide();
				$("#tt2").hide();
				$("#tt3").hide();
				$("#tt4").hide();
				$("#tt5").hide();
				$("#tt6").hide();   
			});

			$("#t1").click(function(){
				$("#tt1").toggle();
				$("#tt2").hide();
				$("#tt3").hide();
				$("#tt4").hide();
				$("#tt5").hide();
				$("#tt6").hide();	
			});

			$("#t2").click(function(){
				$("#tt2").toggle();
				$("#tt1").hide();
				$("#tt3").hide();
				$("#tt4").hide();
				$("#tt5").hide();
				$("#tt6").hide();
			});

			$("#t3").click(function(){
				$("#tt3").toggle();
				$("#tt1").hide();
				$("#tt2").hide();
				$("#tt4").hide();
				$("#tt5").hide();
				$("#tt6").hide();
			});


			$("#t4").click(function(){
				$("#tt4").toggle();
				$("#tt1").hide();
				$("#tt2").hide();
				$("#tt3").hide();
				$("#tt5").hide();
				$("#tt6").hide();
			});

			$("#t5").click(function(){
				$("#tt5").toggle();
				$("#tt1").hide();
				$("#tt2").hide();
				$("#tt3").hide();
				$("#tt4").hide();
				$("#tt6").hide();
			});
			$("#t6").click(function(){
				$("#tt6").toggle();
				$("#tt1").hide();
				$("#tt2").hide();
				$("#tt3").hide();
				$("#tt4").hide();
				$("#tt5").hide();
			});



			// for container
			$("#tt24").hide();
			$("#tt32").hide();
			$("#tt32m").hide();
			$("#ft19").click(function(){
				$("#tt24").show();
				$("#tt32").hide();
				$("#tt32m").hide();
			});
			$("#ft20").click(function(){
				$("#tt24").show();
				$("#tt32").hide();
				$("#tt32m").hide();
			});
			$("#ft21").click(function(){
				$("#tt24").show();
				$("#tt32").hide();
				$("#tt32m").hide();
			});
			$("#ft22").click(function(){
				$("#tt24").show();
				$("#tt32").hide();
				$("#tt32m").hide();
			});
			$("#ft23").click(function(){
				$("#tt24").show();
				$("#tt32").hide();
				$("#tt32m").hide();
			});
			$("#ft23").click(function(){
				$("#tt24").show();
				$("#tt32").hide();
				$("#tt32m").hide();
			});
			$("#ft24").click(function(){
				$("#tt24").show();
				$("#tt32").hide();
				$("#tt32m").hide();
			});
			$("#ft32").click(function(){
				$("#tt24").hide();
				$("#tt32").show();
				$("#tt32m").hide();
			});
			$("#ftm32").click(function(){
				$("#tt24").hide();
				$("#tt32").show();
				$("#tt32m").hide();
			});
			$("#ftm32").click(function(){
				$("#tt24").hide();
				$("#tt32").hide();
				$("#tt32m").show();
			});
			$("#ftmx32").click(function(){
				$("#tt24").hide();
				$("#tt32").hide();
				$("#tt32m").show();
			});

			//for hyva
			$("#tth10").hide();
			$("#tth12").hide();
			$("#tth14").hide();
			$("#th10").click(function(){
				$("#tth10").show();
				$("#tth12").hide();
				$("#tth14").hide();
			});
			$("#th12").click(function(){
				$("#tth12").show();
				$("#tth10").hide();
				$("#tth14").hide();
			});
			$("#th14").click(function(){
				$("#tth12").hide();
				$("#tth14").show();
				$("#tth10").hide();
			});




		});

		function truckchange(truck)
		{
			var ttype=truck.value;
			if(ttype=="Truck")
				frm.timg.src="img/truck.jpg"
			else if(ttype=="LCV")
				frm.timg.src="img/lcv.jpg"
			else if(ttype=="Container")
				frm.timg.src="img/container.jpg"
			else if(ttype=="Trailer")
				frm.timg.src="img/trailer.png"
			else if(ttype=="Hyva")
				frm.timg.src="img/hyva.jpg"
			else if(ttype=="Tanker")
				frm.timg.src="img/tanker.jpg"	
			else if(ttype=="")
				frm.timg.src=""

		}
</script>
	</head>
<body>
		<!---Header -->
		<?php include("head.php"); ?>
		<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('../../assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Post your Goods</h2>
              
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="profile.php">Home</a></li>
            <li>Post Truck</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    

  </main><!-- End #main -->
    <!-- main section -->
  <form name="frm" action="goods.php" method="post">
    <div class="container">
      <div class="container text-center">
        <div class="row">
           <div class="col order-last">
              
            </div>
            <div class="col">
             <div class="mb-3">
                <label for="basic-url" class="form-label" style="float:left;">Source Location <i class="fa fa-map-marker" aria-hidden="true"></i></label>
                
                  <div class="input-group">
                      
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="source" placeholder="Baroda,Gujarat" required>
                   </div>
                  
              </div>
              <div class="mb-3">
                <label for="basic-url" class="form-label" style="float:left;">Destination Location <i class="fa fa-map-marker" aria-hidden="true"></i></label>
                
                  <div class="input-group">
                      
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="destination" placeholder="Mumbai, Maharashtra" required>
                   </div>
                  
              </div>
              <div class="mb-3">
                <label for="basic-url" class="form-label" style="float:left;">Material Name</label>
                
                  <div class="input-group">
                      
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="mname" placeholder="Scrap" required>
                   </div>
                  
              </div>
              <div class="mb-3">
                 <label for="basic-url" class="form-label" style="float:left;">Quantity</label>
                
				 	

                  <div class="input-group">
                      
                      <input type="number" pattern="[0-9]{2}" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="quantity" placeholder="" required> 

					  

                      <input type="radio" name="quan" value="Tonne" class="btn-check" id="btn-check-1-outlined" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btn-check-1-outlined">Tonne(s)</label><br>&nbsp;
                      <input type="radio" name="quan" value="Kilo Litre" class="btn-check" id="btn-check-2-outlined" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btn-check-2-outlined">Kilo Litre(s)</label><br>
                   </div>
              </div>
			  <div class="mb-3">
                <label for="basic-url" class="form-label" style="float:left;">Select Vehicle Type</label>
			  
				<!-- Truck Selection -->

				<select name="truck" onchange="truckchange(this)" class="form-select" aria-label="Default select example" required>
				<option id="t0" selected value="">Select Truck</option>
				<option id="t1" value="Truck">Truck</option>
				<option id="t2" value="Container">Container</option>
				<option id="t3" value="Trailer">Trailer</option>
				<option id="t4" value="Hyva">Hyva</option>
				<option id="t5" value="LCV">LCV</option>
				<option id="t6" value="Tanker">Tanker</option>
				</select>
				<br />
				<img name="timg" class="img-fluid"/>
			  </div>	
			  <div class="mb-3" id="tt1">		
				<!-- Truck starts here -->
					<label for="basic-url" class="form-label" style="float:left;">Select truck body*</label>
					<select name="truckbody" class="form-select" aria-label="Default select example">
					<option id="bo" selected value="">Select Truck</option>
					<option id="ob" value="Open Body">Open Body</option>
					<option id="hb" value="Half Body">Half Body</option>
					</select>
					<br />
	
					<label for="basic-url" style="float: left;" class="form-label">Select No. of tyre*</label>
					<select name="trucktyre" class="form-select" aria-label="Default select example">
					<option id="tyre" selected value="">Select Typre</option>
					<option id="6" value="6">6</option>
					<option id="10" value="10">10</option>
					<option id="12" value="12">12</option>
					<option id="14" value="14">14</option>
					<option id="20" value="20">20</option>
					<option id="22" value="22">22</option>
					</select>
				 <!-- Truck Ends Here -->
				</div>
				<!-- Container -->
				<div class="mb-3" id="tt2">
					<label class="form-label" style="float:left;">Select container body*</label>
					<select name="cbody" class="form-select" aria-label="Default select example">
					<option id="bo" selected value="">Selectbody</option>
					<option id="ft19" value="19 ft sxl">19 ft sxl</option>
					<option id="ft20" value="20 ft sxl">20 ft sxl</option>
					<option id="ft21" value="21 ft sxl">21 ft sxl</option>
					<option id="ft22" value="22 ft sxl">22 ft sxl</option>
					<option id="ft23" value="23 ft sxl">23 ft sxl</option>
					<option id="ft24" value="24 ft sxl">24 ft sxl</option>
					<option id="ft32" value="32 ft sxl">32 ft sxl</option>
					<option id="ft32" value="32 ft sxl HQ">32 ft sxl HQ</option>
					<option id="ftm32" value="32 ft mxl">32 ft mxl</option>
					<option id="ftmx32" value="32 ft mxl HQ">32 ft mxl HQ</option>
					</select>
				</div>	
				<!-- Container Ends Here -->
				
				<!-- Trailer Starts Here -->
				<div class="mb-3" id="tt3"> 
					<label class="form-label" style="float: left;">Select Trailer Body*</label>
					<select name="trbody" class="form-select" aria-label="Default select example">
					<option id="bo" selected value="">Select Body</option>
					<option id="ob" value="40 Ft High Bed">40 Ft High Bed</option>
					<option id="hb" value="40 Ft Semi Bed">40 Ft Semi Bed</option>
					<option id="hb" value="40 Ft Low Bed">40 Ft Low Bed</option>
					<option id="hb" value="20 Ft High Bed">20 Ft High Bed</option>
					</select>
				</div>
				
				<!-- Trailer Ends Here -->

				<!-- Hyva Controls Start Here -->
				<div class="mb-3" id="tt4"> 
					<label class="form-label" style="float:left;">Select Tyres*</label>
					<select name="htyres" class="form-select" aria-label="Default select example">
					<option id="th" selected value="">Select Tyres</option>
					<option id="th10" value="10">10 Tyres</option>
					<option id="th12" value="12">12 Tyres</option>
					<option id="th14" value="14">14 Tyres</option>
					</select>

				</div>
				<!-- Hyva Controls Ends Here -->
				
				<!-- LCV Controls Start Here -->
				<div class="mb-3" id="tt5"> </div>

				<!-- LCV Controls Ends Here -->
				
				<!-- Tanker Control Starts Here -->
				
				<div class="mb-3" id="tt6"> 
					<label class="form-label" style="float: left;">Select Tanker Body*</label>
					<select name="tankerbody" class="form-select" aria-label="Default select example">
					<option id="tankerb" selected value="">Select Body</option>
					<option id="mb" value="Metal Body">Metal Body</option>
					<option id="ssb" value="Stainless Steel Body">Stainless Steel Body</option>
					</select>
				</div>	

				<!-- Tanker Control Ends Here -->

				<!-- Payment Details -->
				<div class="mb-3">
				
					<label for="basic-url" class="form-label" style="float:left;">Rate(Fixed)</label>
                
					<div class="input-group">
					
						<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="rates" placeholder="24000₹" required>
					 </div>


				</div>
				<!-- Payment Details Ends Here -->
		
				
				<div class="mb-3">

					<button type="submit" class="btn btn-danger">Submit</button>

				</div>
	



            </div>
            <div class="col order-first">
              
            </div>
          </div>
        </div>




    </div>
  </form>


    <!-- main section ends here -->
<!-- footer -->
<?php
	 include("footer.php");

?>
<!-- End Footer -->

</body>

</html>