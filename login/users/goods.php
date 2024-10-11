<?php 
    include("../../conn.php");
    $username=$_SESSION['user'];
    $postdate=date('Y-m-d');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

                <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
    
</head>

<body>
   

   <section class="sample-page">
      <div class="container" data-aos="fade-up">
        <center>

    <?php
        @$q=$quantity." ".$quan;

   //echo $vno.$vloca.$vroute.$truck.$truckbody.$trucktyre; 

   if($truck=="Truck")
   {

        @$sql = "INSERT INTO goods(sloca,dloca,mname,quan,vtype,tbody,ttyre,rates,postdate,username,lockstatus,hire)
        VALUES('$source','$destination','$mname','$q','$truck','$truckbody',$trucktyre,$rates,'$postdate','$username','Disapprove','Unhired')";
        
        @mysqli_query($conn,$sql) or die(mysqli_error());

        //echo"Data Inserted. You will be redirected to Dashboard in 5 Seconds";

        header("refresh:5;url=postreq.php");
        
        
    }
    else if($truck=="Container")
    {

         @$sql = "INSERT INTO goods(sloca,dloca,mname,quan,vtype,cbody,rates,postdate,username,lockstatus,hire)
         VALUES('$source','$destination','$mname','$q','$truck','$cbody',$rates,'$postdate','$username','Disapprove','Unhired')"; 

        /* @$sql="insert into truck(vno,vloca,vroute,truck,cbody,ctonne24,ctonne32,ctonne32m) values ('gj423','bvn','abd bvn','container','24ft sxl',12,Null,Null)";  */
         
         @mysqli_query($conn,$sql) or die(mysqli_error()); 

         //echo"Data Inserted. You will be redirected to Dashboard in 5 Seconds";

         header("refresh:5;url=postreq.php");
    }
    else if($truck=="Trailer")
    {
         @$sql = "INSERT INTO goods(sloca,dloca,mname,quan,vtype,trbody,rates,postdate,username,lockstatus,hire)
         VALUES('$source','$destination','$mname','$q','$truck','$trbody',$rates,'$postdate','$username','Disapprove','Unhired')";
         
         @mysqli_query($conn,$sql) or die(mysqli_error());

         //echo"Data Inserted. You will be redirected to Dashboard in 5 Seconds";

         header("refresh:5;url=postreq.php");
    }
    else if($truck=="Hyva")
    {

           @$sql = "INSERT INTO goods(sloca,dloca,mname,quan,vtype,htyres,rates,postdate,username,lockstatus,hire)
           VALUES('$source','$destination','$mname','$q','$truck',$htyres,$rates,'$postdate','$username','Disapprove','Unhired')"; 
          

        /* @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,htyres,htonne10,htonne12,htonne14,lockstatus)
         VALUES('$vno','$vloca','$vroute','$truck',$htyres,$htonne10,$htonne12,$htonne14,'Disapprove')"; */
         
         @mysqli_query($conn,$sql) or die(mysqli_error());

         //echo"Data Inserted. You will be redirected to Dashboard in 5 Seconds";

         header("refresh:5;url=postreq.php");
    }
    else if($truck=="LCV")
    {
         @$sql = "INSERT INTO goods(sloca,dloca,mname,quan,vtype,rates,postdate,username,lockstatus,hire)
         VALUES('$source','$destination','$mname','$q','$truck',$rates,'$postdate','$username','Disapprove','Unhired')";
         
         @mysqli_query($conn,$sql) or die(mysqli_error());

        // echo"Data Inserted. You will be redirected to Dashboard in 5 Seconds";
        
         header("refresh:8;url=postreq.php");
         
    }
    else if($truck=="Tanker")
    {
         @$sql = "INSERT INTO goods(sloca,dloca,mname,quan,vtype,tanbody,rates,postdate,username,lockstatus,hire)
         VALUES('$source','$destination','$mname','$q','$truck','$tankerbody',$rates,'$postdate','$username','Disapprove','Unhired')";
         
         @mysqli_query($conn,$sql) or die(mysqli_error());

         //echo"Data Inserted. You will be redirected to Dashboard in 5 Seconds";

         header("refresh:5;url=postreq.php");
    }

    // @$sql = "INSERT INTO truck(vno,vloca,vroute,truck,tbody,ttyre,cbody,ctonne24,ctonne32,ctonne32m,trbody,htyres,htonne10,htonne12,htonne14,lcap,tanbody,tancap)
            // VALUES('$vno','$vloca','$vroute','$truck','$truckbody',$trucktyre,'$cbody',$ttonne24,$ttonne32,$ttonne32m,'$trbody',$htyres,$htonne10,$htonne12,$htonne14,$lcap,'$tankerbody','$tankcap')";

     
 
     // echo"Data inserted";

	    //header("location:truck.php");
?>
            <br>
            <div id="status"style="font-size:30px;"></div>

            <script>countDown(5,"status");</script> 
            <br />
           <img src='img/loading.gif'/>
        </center>
        </div>
    </section>

<?php 
    include("footer.php");

?>
    </body>

</html>