<?php
    include("../../conn.php");
?>
<head>
<script>
        function countDown(secs,elem) {

            var element = document.getElementById(elem);

            element.innerHTML = "Your Profile Has Been Updated ";

            if(secs < 1) {

            clearTimeout(timer);

            element.innerHTML = '<h2></h2>';

            

            }

            secs--;

            var timer = setTimeout('countDown('+secs+',"'+elem+'")',900);

            }


    </script>


</head>
<?php 
    if($_FILES['photo']['name']!="")
    {
        $table=mysqli_query($conn,"select profileimg from register where regid=$regid");
        $row=mysqli_fetch_array($table);
        $oldimg=$row[0];
        
        if($oldimg!="")
            unlink($oldimg);

        $path="profile/".$regid.strchr($_FILES['photo']['name'],".");
        move_uploaded_file($_FILES['photo']['tmp_name'],$path);
        mysqli_query($conn,"update register set pass='$pass',fname='$fname',lname='$lname',bname='$bname',pno='$pno',gender='$gender',state='$state',uadd='$uadd',wallet='$wallet',profileimg='$path' where regid=$regid");
        header("refresh:5;url=profile.php");

        echo"<div id='status' style='font-size:30px;'></div>

            <script>countDown(5,'status');</script> 
        
            <img height='100px' width='100px' src='img/check-green.gif'/>
            </center>
            </div>";

    }
    else
    {
        mysqli_query($conn,"update register set pass='$pass',fname='$fname',lname='$lname',bname='$bname',pno='$pno',gender='$gender',state='$state',uadd='$uadd',wallet='$wallet' where regid=$regid");
        header("refresh:5;url=profile.php");
        
        echo"<center><div id='status' style='font-size:30px;'></div>
        <img height='100px' width='100px' src='img/check-green.gif'/>
        <script>countDown(5,'status');</script> 
    
       
        </center>
        </div>";

    }
?>
