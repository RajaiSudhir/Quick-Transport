<?php
	
	include("../conn.php");
	
	$er = "";
	if(isset($btnchngpass))
	{
		
		$table=mysqli_query($conn,"Select * from register where email='$email' and secq='$secq' and seca='$ans' and lockstatus='Unlock'");
	
		if(mysqli_num_rows($table)>0) 
		{
			if($pass!=$cpass)
				$er="New Password and Confirm Password does not match!";
			else
			{
				mysqli_query($conn,"update register set pass='$cpass' where email='$email' and secq='$secq' and seca='$ans' and lockstatus='Unlock'");
				echo "Pass Changed";
				header("refesh:5;url:index.php");
			}
			
		}
		else 
			@$er = "Wrong  details are entered!";
			
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<form method="post">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"> </i>
class="zmdi zmdi-landscape"
<img src="/logo.png"/>
style="background-image:url('images/logo.png')"
						-->
						<i > <img src="images/logo.png" height="110px" width="110px"/> </i>
						
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Select Security Question">
						<select class="input100"  name="secq" placeholder="Security Question" required>
							<option style="color:black" value="">Select security question</option>
							<option style="color:black" value="Favourite color?">Favourite color?</option>
							<option style="color:black" value="What is your favourite book?">What is your favourite book?</option>
				          	<option style="color:black" value="What is your pet name?">What is your pet name?</option>
						</select>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="ans" placeholder="Your Answer" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>



					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="cpass" placeholder="Confirm Password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button type="submit" name="btnchngpass" class="login100-form-btn">
							Change Pass
						</button><br/>
						<button onclick="location.href='index.php'" type="button" name="back" class="login100-form-btn">
							Back
						</button>
					</div>
					<div>
					<span class="login100-form-title p-b-34 p-t-27">
					<?php echo"$er"; ?>
					</span>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
					<div class="text-center">
						
						<a class="txt1" href="../register.html">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	</form>

</body>
</html>