<?php 
    include("conn.php");
    mysqli_query($conn,"insert into truckbid(id,price,material,quan,lcity,unlcity,email,biddermail) values ($trid,$price,'$material','$quan','$lcity','$unlcity','$email','$bmail')");
    //echo"Success";
    header("refresh:5;url=truckloading.php");
?>  
<html>
    <head>
        <script>
                function countDown(secs,elem) {

                    var element = document.getElementById(elem);

                    element.innerHTML = "Your bid has been created you will be redirected in : "+secs+" seconds";

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
    <br><center>
        <div id="status"style="font-size:30px;"></div>
            <script>countDown(5,"status");</script> 
            <br />
           <img src='loading.gif'/>
        </div>
        </center>
    </body>
</html>