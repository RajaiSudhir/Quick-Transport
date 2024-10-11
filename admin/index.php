<?php
	include("../conn.php");
	if(isset($btnlogin))
	{
		$table=mysqli_query($conn,"select * from admin_login where email='$email' and pass='$pass'");
		
		if (mysqli_num_rows($table)>0) 
		{
				$_SESSION['admin'] = $email;
				header("location:dashboard.php");
		}
		else 
		{
			echo "<center><font color='red' size='7'>Error: Wrong details... </center></font>";
		}
	}
?>

<html>
	<head>
		<title>Admin</title>
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.bg{
		  background: #8E0E00;  /* fallback for old browsers */
		  background: -webkit-linear-gradient(to right, #1F1C18, #8E0E00);  /* Chrome 10-25, Safari 5.1-6 */
		  background: linear-gradient(to right, #1F1C18, #8E0E00); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		  font-family:cursive;
		  font-size:30px;
		  color: white;
		}
		.loginbox{
			padding: 160px;
			border-radius: 10px;
		}
		.avatar {
			vertical-align: middle;
			width: 100px;
			height: 100px;
			border-radius: 50%;
		}
		
		.button{
			  background: red;
			  border-radius: 999px;
			  box-shadow: #FF69B4 0 10px 20px -10px;
			  box-sizing: border-box;
			  color: #FFFFFF;
			  cursor: pointer;
			  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
			  font-size: 16px;
			  font-weight: 700;
			  line-height: 24px;
			  opacity: 1;
			  outline: 0 solid transparent;
			  padding: 8px 18px;
			  user-select: none;
			  -webkit-user-select: none;
			  touch-action: manipulation;
			  width: fit-content;
			  word-break: break-word;
			  border: 0;
			  text-decoration: none;
		}
		
	</style>
	</head>
	<body class="bg" scroll="no" style="overflow: hidden">
		
	<form method="post"><center>
		<div class="loginbox">
		<label>Welcome Admin</label><br><br>
		<img class="avatar" src="avatar.png" /><br><br>
		
		<input style="border-radius:10px; height:30px; width:fit-content;" type="text" name="email" placeholder="Email" required> <br><br>
		<input style="border-radius:10px; height:30px; width:fit-content;" type="password" name="pass" placeholder="Password" required>
		<br /><br>
		<button class="button" role="button" type="submit" name="btnlogin">Login</button>
		<a class="button" href='../index.php'>Home</a>
		<!-- <input type="submit" name="btnlogin" value="Login"/> -->
		</div>
	</form>
	</body>
</html>