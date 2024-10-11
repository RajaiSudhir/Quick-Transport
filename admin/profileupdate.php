<?php
    include("../conn.php");
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
    
        
        
        
            mysqli_query($conn,"update admin_login set pass='$pass' where email='$email'");
            //header("refresh:5;url=profile.php");

        echo"<div id='status' style='font-size:30px;'></div>

            <script>countDown(5,'status');</script> 
        
            <img height='100px' width='100px' src='img/check-green.gif'/>
            </center>
            </div>";

    
        
        echo"<center><div id='status' style='font-size:30px;'></div>
        <img height='100px' width='100px' src='img/check-green.gif'/>
        <script>countDown(5,'status');</script> 
    
       
        </center>
        </div>";

    
?>
