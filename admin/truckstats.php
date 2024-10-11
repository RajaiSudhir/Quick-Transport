<?php

include("../conn.php");

mysqli_query($conn,"update truck set lockstatus='$status' where id=$id");


header("location:truckreq.php");

?>