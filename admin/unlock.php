<?php

include("../conn.php");

mysqli_query($conn,"update register set lockstatus='$lock' where regid=$id");

header("location:users.php");   

?>