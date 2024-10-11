<?php 
    include("../../conn.php");
    $username=$_SESSION['user'];
    $postdate=date('Y-m-d');

    @$vroute=$chk1." ".$chk2." ".$chk3." ".$chk4." ".$chk5." ".$chk6." ".$chk7." ".$chk8." ".$chk9." ".$chk10." ".$chk11." ".$chk12." ".$chk13." ".$chk14." ".$chk15." ".$chk16." ".$chk17." ".$chk18." ".$chk19." ".$chk20." ".$chk21." ".$chk22." ".$chk23." ".$chk24." ".$chk25;

   //echo $vno.$vloca.$vroute.$truck.$truckbody.$trucktyre;
?>
<script>
     
     function countDown(secs,elem) {

     var element = document.getElementById(elem);

     element.innerHTML = "You WIll Be Redirected in: "+secs+" seconds";

     if(secs < 1) {

     clearTimeout(timer);

     element.innerHTML = '<h2></h2>';



     }

     secs--;

     var timer = setTimeout('countDown('+secs+',"'+elem+'")',900);

     }


</script>


<?php
   if($truck=="Truck")
   {
        @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,tbody,ttyre,postdate,username,lockstatus,hire)
        VALUES('$vno','$vloca','$vroute','$truck','$truckbody',$trucktyre,'$postdate','$username','Disapprove','Unhired')";
        
        @mysqli_query($conn,$sql);

        header("refresh:8;url=postreq.php");
    }
    else if($truck=="Container")
    {

          //echo "$vno $vloca $vroute $truck $cbody $ttonne24 $ttonne32 $ttonne32m";


         if(!empty($ttonne24))
          {
               @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,cbody,ctonne24,postdate,username,lockstatus,hire)
               VALUES('$vno','$vloca','$vroute','$truck','$cbody','$ttonne24','$postdate','$username','Disapprove','Unhired')"; 
               header("refresh:8;url=postreq.php");
          }
          else if(!empty($ttonne32))
          {
               @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,cbody,ctonne32,postdate,username,lockstatus,hire)
               VALUES('$vno','$vloca','$vroute','$truck','$cbody','$ttonne32','$postdate','$username','Disapprove','Unhired')"; 
               header("refresh:8;url=postreq.php");
          }
          else if(!empty($ttonne32m))
          {
               @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,cbody,ctonne32m,postdate,username,lockstatus,hire)
               VALUES('$vno','$vloca','$vroute','$truck','$cbody','$ttonne32m','$postdate','$username','Disapprove','Unhired')"; 
               header("refresh:8;url=postreq.php");
          }

        /* @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,cbody,ctonne24,ctonne32,ctonne32m)
         VALUES('$vno','$vloca','$vroute','$truck','$cbody',$ttonne24,$ttonne32,$ttonne32m)"; */

        /* @$sql="insert into truck(vno,vloca,vroute,truck,cbody,ctonne24,ctonne32,ctonne32m) values ('gj423','bvn','abd bvn','container','24ft sxl',12,Null,Null)";  */
         
         mysqli_query($conn,$sql) or die(mysqli_error()); 
    }
    else if($truck=="Trailer")
    {
         @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,trbody,postdate,username,lockstatus,hire)
         VALUES('$vno','$vloca','$vroute','$truck','$trbody','$postdate','$username','Disapprove','Unhired')";
         
         @mysqli_query($conn,$sql) or die(mysqli_error());
         header("refresh:8;url=postreq.php");
    }
    else if($truck=="Hyva")
    {

          if(!empty($htonne10))
          {
               @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,htyres,htonne10,postdate,username,lockstatus,hire)
               VALUES('$vno','$vloca','$vroute','$truck','$htyres','$htonne10','$postdate','$username','Disapprove','Unhired')"; 
               header("refresh:8;url=postreq.php");
          }
          else if(!empty($htonne12))
          {
               @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,htyres,htonne12,postdate,username,lockstatus,hire)
               VALUES('$vno','$vloca','$vroute','$truck','$htyres','$htonne12','$postdate','$username','Disapprove','Unhired')";
               header("refresh:8;url=postreq.php"); 
          }
          else if(!empty($htonne14))
          {
               @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,htyres,htonne14,postdate,username,lockstatus,hire)
               VALUES('$vno','$vloca','$vroute','$truck','$htyres','$htonne14','$postdate','$username','Disapprove','Unhired')"; 
               header("refresh:8;url=postreq.php");
          }

        /* @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,htyres,htonne10,htonne12,htonne14)
         VALUES('$vno','$vloca','$vroute','$truck',$htyres,$htonne10,$htonne12,$htonne14)"; */
         
         @mysqli_query($conn,$sql) or die(mysqli_error());
    }
    else if($truck=="LCV")
    {
         @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,lcap,postdate,username,lockstatus,hire)
         VALUES('$vno','$vloca','$vroute','$truck','$lcap','$postdate','$username','Disapprove','Unhired')";
         
         @mysqli_query($conn,$sql) or die(mysqli_error());
         header("refresh:8;url=postreq.php");
    }
    else if($truck=="Tanker")
    {
         @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,tanbody,tancap,postdate,username,lockstatus,hire)
         VALUES('$vno','$vloca','$vroute','$truck','$tankerbody','$tankcap','$postdate','$username','Disapprove','Unhired')";
         
         @mysqli_query($conn,$sql) or die(mysqli_error());
         header("refresh:8;url=postreq.php");
    }

    // @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,tbody,ttyre,cbody,ctonne24,ctonne32,ctonne32m,trbody,htyres,htonne10,htonne12,htonne14,lcap,tanbody,tancap)
    // VALUES('$vno','$vloca','$vroute','$truck','$truckbody',$trucktyre,'$cbody',$ttonne24,$ttonne32,$ttonne32m,'$trbody',$htyres,$htonne10,$htonne12,$htonne14,$lcap,'$tankerbody','$tankcap')";

    echo"<center><div id='status'style='font-size:30px;'></div>

    <script>countDown(5,'status');</script> 
    <br />
     <img src='img/loading.gif'/>
     </center>"
     
 
    // echo"Data inserted";

	//header("location:truck.php");




?>