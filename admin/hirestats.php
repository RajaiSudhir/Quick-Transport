<?php

include("../conn.php");

//echo"$hire , $id";
mysqli_query($conn,"update truck set hire='$hire' where id=$id");

header("location:truckreq.php");

?>