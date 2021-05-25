<?php
include '../conn.php';
$pid=$_GET['pid'];
$q11="delete from user_album where pid='$pid'";
if($r11=mysqli_query($conn,$q11))
{
    header("location:user_uploads.php");

}

?>