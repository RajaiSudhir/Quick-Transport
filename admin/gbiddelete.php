<?php
    include("../conn.php");
    $table=mysqli_query($conn,"delete from bidnow where bid=$id");
    header("location:goodsbid.php");
?>