<?php

include("../conn.php");

//echo"$hire , $id";
mysqli_query($conn,"update goods set hire='$hire' where gid=$id");

header("location:goodsreq.php");

?>