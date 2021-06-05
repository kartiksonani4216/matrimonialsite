<?php
include 'conn.php';
if(isset($_SESSION['fname']) && isset($_SESSION['uid']) && isset($_SESSION['email']) )
{
    if(isset($_GET['sid']))
    {
      $sid=$_GET['sid'];
    }
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