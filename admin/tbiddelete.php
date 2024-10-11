<?php
    include("../conn.php");
    $table=mysqli_query($conn,"delete from truckbid where tid=$id");
    header("location:goodsbid.php");
?>