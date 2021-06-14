<?php
include '../conn.php';
session_start();
if(isset($_SESSION['aname']) && isset($_SESSION['aid']) && isset($_SESSION['aemail']) && isset($_SESSION['aimg']))
{
    if(isset($_GET['aid']))
    {
        $aid=$_GET['aid'];
    }
$q11="delete  from abuse_report where aid='$aid'";
if($r11=mysqli_query($conn,$q11))
{
    header("location:admin_abuse_report.php");
}
}
else{
    header("location:admin_login.php");
}
?>