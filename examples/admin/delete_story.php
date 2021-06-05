<?php
include '../conn.php';
if(isset($_SESSION['aname']) && isset($_SESSION['aid']) && isset($_SESSION['aemail']) && isset($_SESSION['aimg']))
{
    if(isset($_GET['sid']))
    {
        $sid=$_GET['sid'];
    }
$q11="delete  from success_story where sid='$sid'";
if($r11=mysqli_query($conn,$q11))
{
    header("location:view_success_story.php");
}
}
else{
    header("location:admin_login.php");
}
?>