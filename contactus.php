<?php
    include("conn.php");
    $sql= "INSERT INTO contact(name,mail,pno,subject,msg) values('$name','$email',$pno,'$subject','$message')"; 
    mysqli_query($conn,$sql) or die(mysqli_error());
    $msg="Your message has been sent, Thank You";
    header("location:contact.php?msg=$msg");
?>