<?php
include '../conn.php';
$sid=$_GET['sid'];
$q11="delete  from success_story where sid='$sid'";
if($r11=mysqli_query($conn,$q11))
{
    header("location:view_success_story.php");
}

?>