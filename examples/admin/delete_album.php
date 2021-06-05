<?php
include '../conn.php';

    if(isset($_GET['pid']))
    {
        $pid=$_GET['pid'];
    }
    $q12="select * from user_album where pid='$pid'";
    if($r12=mysqli_query($conn,$q12))
    {
        while($num12=mysqli_fetch_assoc($r12))
        {
            $img=$num12['img'];
        }
    }
unlink("../images/album/$img");
$q11="delete from user_album where pid='$pid'";
if($r11=mysqli_query($conn,$q11))
{
    header("location:user_uploads.php");

}

?>