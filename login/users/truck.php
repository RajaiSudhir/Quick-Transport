<?php
	 include("head.php");

?>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Post</title>
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
			$("#fts32").click(function(){
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
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('../../assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Post your Truck</h2>
              
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="../../index.html">Home</a></li>
            <li>Post</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    

  </main><!-- End #main -->
    <!-- main section -->
  

    <div class="container-fluid">
		<form action='insert.php' method='post' name='frm'>
		<div class="row"> 
			
			<div class="col-4"></div>
			
			<div class="col-4"> 
				<div class="mb-3">
				  <label class="form-label">Vehicle Number*</label>
				  <input type="text" name="vno" class="form-control" placeholder="GJ 04 XY 2553" />
				</div>
			</div>
			
			<div class="col-4"></div>
			
		</div>
		<div class="row"> 
			
			<div class="col-4"></div>
			<div class="col-4"> 
				<div class="mb-3">
				  <label class="form-label">Vehicle Location*</label>
				  <input type="text" class="form-control" name="vloca" placeholder="Baroda, Gujarat" />
				</div>
			</div>
			<div class="col-4"></div>
				
		</div>
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4 mb-3">
				<label class="form-label">Add Lorry Route*</label>
			</div>
			<div class="col-4"></div>
		</div>
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4 mb-3">
			
				<input type="checkbox" class="btn-check mt-3" id="btn-check-2-outlined" value="Gujarat" name="chk1">
				<label class="btn btn-outline-secondary" for="btn-check-2-outlined">+ Gujarat</label>
				
				<input type="checkbox" name="chk2" value="Delhi" class="btn-check" id="btn-check-3-outlined" >
				<label class="btn btn-outline-secondary" for="btn-check-3-outlined">+ Delhi</label>
				
				<input type="checkbox" name="chk3" value="Maharashtra" class="btn-check" id="btn-check-4-outlined" >
				<label class="btn btn-outline-secondary" for="btn-check-4-outlined">+ Maharashtra</label>
				
				<input type="checkbox" class="btn-check" name="chk4" value="Karnatak" id="btn-check-5-outlined" >
				<label class="btn btn-outline-secondary" for="btn-check-5-outlined">+ Karnatak</label>

			
				<input type="checkbox" class="btn-check mt-3" name="chk5" value="Telengana" id="btn-check-6-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-6-outlined">+ Telengana</label> 
				
				<input type="checkbox" class="btn-check" name="chk6" value="Uttar Pradesh" id="btn-check-7-outlined" >
				<label class="btn btn-outline-secondary  mt-3" for="btn-check-7-outlined">+ Uttar Pradesh</label>
				
				<input type="checkbox" class="btn-check" name="chk7" value="Madhya Pradesh" id="btn-check-8-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-8-outlined">+ Madhya Pradesh</label>		
				
				<input type="checkbox" class="btn-check" name="chk8" value="Tamil Nadu" id="btn-check-9-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-9-outlined">+ Tamil Nadu</label>
				
				<input type="checkbox" class="btn-check" name="chk9" value="West Bengal" id="btn-check-10-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-10-outlined">+ West Bengal</label>
				
				<input type="checkbox" class="btn-check" name="chk10" value="Rajasthan" id="btn-check-11-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-11-outlined">+ Rajasthan</label>

				
				
				<input type="checkbox" class="btn-check" name="chk11" value="Andhra Pradesh" id="btn-check-12-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-12-outlined">+ Andhra Pradesh</label>
				
				<input type="checkbox" class="btn-check" name="chk12" value="Punjab" id="btn-check-13-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-13-outlined">+ Punjab</label>
				
				<input type="checkbox" class="btn-check" name="chk13" value="Haryana" id="btn-check-14-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-14-outlined">+ Haryana</label>
				
				
				<input type="checkbox" class="btn-check" name="chk14" value="Bihar" id="btn-check-15-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-15-outlined">+ Bihar</label>
				
				<input type="checkbox" class="btn-check" name="chk15" value="Assam" id="btn-check-16-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-16-outlined">+ Assam</label>
				
				<input type="checkbox" class="btn-check" name="chk16" value="Chhattisgarh" id="btn-check-17-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-17-outlined">+ Chhattisgarh</label>
				
				<input type="checkbox" class="btn-check" name="chk17" value="Odisha" id="btn-check-18-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-18-outlined">+ Odisha</label>
				
				
				<input type="checkbox" class="btn-check" name="chk18" value="Kerala" id="btn-check-19-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-19-outlined">+ Kerala</label>
				
				<input type="checkbox" class="btn-check" name="chk19" value="Uttrakhand" id="btn-check-20-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-20-outlined">+ Uttrakhand</label>
				
				<input type="checkbox" class="btn-check" name="chk20" value="Puducherry" id="btn-check-21-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-21-outlined">+ Puducherry</label>
				
				<input type="checkbox" class="btn-check" name="chk21" value="Tripura" id="btn-check-22-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-22-outlined">+ Tripura</label>
				
							
				<input type="checkbox" class="btn-check" name="chk22" value="Mizoram" id="btn-check-23-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-23-outlined">+ Mizoram
				</label>
				
				<input type="checkbox" class="btn-check" name="chk23" value="Goa" id="btn-check-24-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-24-outlined">+ Goa</label>
				
				<input type="checkbox" class="btn-check" name="chk24" value="Manipur" id="btn-check-25-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-25-outlined">+ Manipur</label>
				
				<input type="checkbox" class="btn-check" name="chk25" value="Jharkhand" id="btn-check-26-outlined" >
				<label class="btn btn-outline-secondary mt-3" for="btn-check-26-outlined">+ Jharkhand</label>
				
			</div>
			<div class="col-4"></div>
		</div>
		
		
		<div class="row">
			
			<div class="col-4"> </div>
			<div class="col-4 mb-3">
				<label class="form-label">Select truck type*</label>
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
			<div class="col-4 mb-3">
				
				
			</div>

		</div>
		
		<!-- Truck  tt1 -->
<div class="row" id="tt1" >
	<div class="col-4"> </div>
	<div class="col-4 mb-3">
	 <label class="form-label">Select truck body*</label>
		<select name="truckbody" class="form-select" aria-label="Default select example">
		<option id="bo" selected value="">Select Truck</option>
		<option id="ob" value="Open Body">Open Body</option>
		<option id="hb" value="Half Body">Half Body</option>
		</select>
	
	
	 <label class="form-label">Select No. of tyre*</label>
		<select name="trucktyre" class="form-select" aria-label="Default select example">
		<option id="tyre" selected value="">Select Typre</option>
		<option id="6" value="6">6</option>
		<option id="10" value="10">10</option>
		<option id="12" value="12">12</option>
		<option id="14" value="14">14</option>
		<option id="20" value="20">20</option>
		<option id="22" value="22">22</option>
		</select>
	</div>
	<div class="col-4"></div>
</div>

	<!-- Truck Ends Here -->
		
		
	<!-- Container  tt2 -->
	<div class="row" id="tt2">
			<div class="col-4"> </div>
			<div class="col-4 mb-3">
				<label class="form-label">Select container body*</label>
				<select name="contbody" class="form-select" aria-label="Default select example">
				<option id="bo" selected value="">Selectbody</option>
				<option id="ft19" value="Open Body">19 ft sxl</option>
				<option id="ft20" value="Half Body">20 ft sxl</option>
				<option id="ft21" value="Half Body">21 ft sxl</option>
				<option id="ft22" value="Half Body">22 ft sxl</option>
				<option id="ft23" value="Half Body">23 ft sxl</option>
				<option id="ft24" value="Half Body">24 ft sxl</option>
				<option id="ft32" value="Half Body">32 ft sxl</option>
				<option id="fts32" value="Half Body">32 ft sxl HQ</option>
				<option id="ftm32" value="Half Body">32 ft mxl</option>
				<option id="ftmx32" value="Half Body">32 ft mxl HQ</option>
				</select>
				<div class="row" id="tt24">
					<div class="col-12"> 			
						<label class="form-label">Select Tonne*</label>
							<select name="ttonne24" class="form-select" aria-label="Default select example">
							<option id="tyre" selected value="">Select Tonne</option>
							<option id="4tone" value="Truck">4 Tonne(s)</option>
							<option id="5tone" value="10">5 Tonne(s)</option>
							<option id="6tone" value="12">6 Tonne(5)</option>
							</select>
					</div>
				</div>

				<div class="row" id="tt32">
					<div class="col-12"> 			
						<label class="form-label">Select Tonne*</label>
							<select name="ttonne32" class="form-select" aria-label="Default select example">
							<option id="tyre" selected value="">Select Tonne</option>
							<option id="7tone" value="Truck">7 Tonne(s)</option>
							<option id="8tone" value="10">8 Tonne(s)</option>
							<option id="9tone" value="12">9 Tonne(5)</option>
							</select>
					</div>
				</div>


				<div class="row" id="tt32m">
					<div class="col-12"> 			
						<label class="form-label">Select Tonne*</label>
							<select name="ttonne32m" class="form-select" aria-label="Default select example">
							<option id="tyre" selected value="">Select Tonne</option>
							<option id="15tone" value="15">15 Tonne(s)</option>
							<option id="16tone" value="16">16 Tonne(s)</option>
							<option id="17tone" value="17">17 Tonne(5)</option>
							<option id="18tone" value="18">18 Tonne(5)</option>
							</select>
					</div>
				</div>


			 </div>	
			
			<div class="col-4"></div>
		</div>


		<!-- Container Ends Here -->


	<!-- Trailer Control Starts here -->

	<div class="row" id="tt3" >
			<div class="col-4"> </div>
			<div class="col-4 mb-3">
			<label class="form-label">Select Trailer Body*</label>
				<select name="trbody" class="form-select" aria-label="Default select example">
				<option id="bo" selected value="">Select Body</option>
				<option id="ob" value="40 Ft High Bed">40 Ft High Bed</option>
				<option id="hb" value="40 Ft Semi Bed">40 Ft Semi Bed</option>
				<option id="hb" value="40 Ft Low Bed">40 Ft Low Bed</option>
				<option id="hb" value="20 Ft High Bed">20 Ft High Bed</option>
				</select>
			</div>
			<div class="col-4"></div>
		</div>

		
		<!-- Trailer Control ends here -->

		<!-- Hyva Control Starts here -->
		
		<div class="row" id="tt4" >
			<div class="col-4"> </div>
			<div class="col-4 mb-3">
			<label class="form-label">Select Tyres*</label>
				<select name="htyres" class="form-select" aria-label="Default select example">
				<option id="th" selected value="">Select Tyres</option>
				<option id="th10" value="10">10 Tyres</option>
				<option id="th12" value="12">12 Tyres</option>
				<option id="th14" value="14">14 Tyres</option>
				</select>

				<div class="row" id="tth10">
					<div class="col-12"> 			
						<label class="form-label">Select Tonne*</label>
							<select name="htonne10" class="form-select" aria-label="Default select example"> 
							<option id="tyre" selected value="">Select Tonne</option>
							<option id="18tth" value="18">18 Tonne(s)</option>
							<option id="19tth" value="19">19 Tonne(s)</option>
							<option id="20tth" value="20">20 Tonne(s)</option>
							</select>
					</div>
				</div>
				<div class="row" id="tth12">
					<div class="col-12"> 			
						<label class="form-label">Select Tonne*</label>
							<select name="htonne12" class="form-select" aria-label="Default select example">
							<option id="tyre" selected value="">Select Tonne</option>
							<option id="tth22" value="22">22 Tonne(s)</option>
							<option id="tth23" value="23">23 Tonne(s)</option>
							<option id="tth24" value="24">24 Tonne(s)</option>
							<option id="tth25" value="25">25 Tonne(s)</option>
							</select>
					</div>
				</div>
				<div class="row" id="tth14">
					<div class="col-12"> 			
						<label class="form-label">Select Tonne*</label>
							<select name="htonne14" class="form-select" aria-label="Default select example">
							<option id="tyre" selected value="">Select Tonne</option>
							<option id="tth32" value="32">32 Tonne(s)</option>
							<option id="tth33" value="33">33 Tonne(s)</option>
							<option id="tth34" value="34">34 Tonne(s)</option>
							<option id="tth35" value="35">35 Tonne(s)</option>
							</select>
					</div>
				</div>


			</div>
			<div class="col-4"></div>
		</div>

		


		<!-- Hyva Ends here -->

		<!-- LCV Starts here -->
		<div class="row" id="tt5" >
			<div class="col-4"> </div>
			<div class="col-4 mb-3">
			<label class="form-label">Select LCV Capacity*</label>
				<select name="lcap" class="form-select" aria-label="Default select example">
				<option id="cap" selected value="">Select Capacity</option>
				<option id="1t" value="1">1 Tonne(s)</option>
				<option id="2t" value="2">2 Tonne(s)</option>
				<option id="3t" value="3">3 Tonne(s)</option>
				<option id="4t" value="4">4 Tonne(s)</option>
				<option id="5t" value="5">5 Tonne(s)</option>
				<option id="6t" value="6">6 Tonne(s)</option>
				</select>
			</div>
			<div class="col-4"></div>
		</div>

		<!-- LCV Ends here -->

		<!-- Tanker Starts here -->

		<div class="row" id="tt6" >
			<div class="col-4"> </div>
			<div class="col-4 mb-3">
			<label class="form-label">Select Tanker Body*</label>
				<select name="tankerbody" class="form-select" aria-label="Default select example">
				<option id="tankerb" selected value="">Select Body</option>
				<option id="mb" value="Metal Body">Metal Body</option>
				<option id="ssb" value="Stainless Steel Body">Stainless Steel Body</option>
				</select>
			
			
			 <label class="form-label">Select Tanker Capacity*</label>
				<select name="tankcap" class="form-select" aria-label="Default select example">
				<option id="tyre" selected value="">Select Capacity</option>
				<option id="10kl" value="10 KL">10 KL</option>
				<option id="25kl" value="25 KL">25 KL</option>
				<option id="35kl" value="35 KL">35 KL</option>
				</select>
			</div>
			<div class="col-4"></div>
		</div>
		<!-- Tanker Ends here -->


		<div class="row">
			<div class="col-4"> </div>
			<div class="col-4 mb-3">
				<button type="submit" class="btn btn-primary">Attach and Post Lorry</button>
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
<script src="js/main.js"></script>
</body>

</html>