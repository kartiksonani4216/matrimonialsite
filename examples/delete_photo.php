<?php
include 'conn.php';

    if(isset($_GET['pid']))
    {
        $pid=$_GET['pid'];
    }
        $q4="select * from user_album where pid='$pid'";
        if($r4=mysqli_query($conn,$q4))
        {
            while($num4=mysqli_fetch_assoc($r4))
            {
                $img=$num4['img'];
            }
        }
        unlink("images/album/$img");
        $q3="delete from user_album where pid='$pid'";
        if($r3=mysqli_query($conn,$q3))
        {
            header("location:flip.php");
        }
        else
        {
            header("location:flip.php");
        }   
    


?>