<?php
include 'conn.php';
if(isset($_GET['pid']))
    {
        $pid=$_GET['pid'];
        $q3="delete from user_album where pid='$pid'";
        if($r3=mysqli_query($conn,$q3))
        {
            header("location: flip.php");
        }
        else
        {
            header("location: flip.php");
        }   
    }
?>