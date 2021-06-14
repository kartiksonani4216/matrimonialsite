<?php
include 'conn.php';
session_start();
if(isset($_SESSION['fname']) && isset($_SESSION['uid']) && isset($_SESSION['email']) )
{
    if(isset($_GET['sid']))
    {
      $sid=$_GET['sid'];
    }
     
 $q12="select * from success_story where sid='$sid'";
 if($r12=mysqli_query($conn,$q12))
 {
     while($num12=mysqli_fetch_assoc($r12))
     {
         $img=$num12['img'];
     }
 }
 unlink("images/couple_photo/$img"); 
$q2="delete from success_story where sid='$sid'";
if($r1=mysqli_query($conn,$q2))
{
    header("location:view_success_story.php");
    

}
}
else{
  header("location:user/user_login.php");
}

?>