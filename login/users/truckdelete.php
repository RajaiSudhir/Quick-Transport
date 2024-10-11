<?php
    include("../../conn.php");
    $table=mysqli_query($conn,"delete from truck where id=$id");
    header("location:postreq.php")
?>