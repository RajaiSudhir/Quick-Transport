<?php
    include("../../conn.php");
    $table=mysqli_query($conn,"delete from goods where gid=$id");
    header("location:postreq.php")
?>