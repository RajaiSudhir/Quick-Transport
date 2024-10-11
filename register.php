<?php

	include("conn.php");
try{
	$sql = "INSERT INTO register(email,pass,fname,lname,bname,adhar,gst,pno,gender,state,lockstatus,secq,seca)
	VALUES('$email','$pass','$fname','$lname','$bname',$adhar,'$gst',$pno,'$gender','$state','Unlock','$security','$sa')";

	mysqli_query($conn,$sql);
}
catch(Exception $e){
	
}
if (mysqli_affected_rows($conn)>0) 
	header("location:login/index.php");
else 
  echo "<center><font color='red' size='6'>Error: Same Email address or Adhar No or GST no found. If not you contact Admin for assistance. </center></font>";


$conn->close();


?>