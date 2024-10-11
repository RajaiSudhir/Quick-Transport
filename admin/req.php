<?php

include("../conn.php");
mysqli_query($conn,"update goods set lockstatus='$status' where gid=$id");
header("location:goodsreq.php");

?>