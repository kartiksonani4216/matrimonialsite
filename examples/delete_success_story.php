<?php
include 'conn.php';
$sid=$_GET['sid'];
$q2="delete from success_story where sid='$sid'";
if($r1=mysqli_query($conn,$q2))
{
    header("location:view_success_story.php");
    

}

?>