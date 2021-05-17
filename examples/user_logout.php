<?php
session_start();
if(isset($_SESSION['fname']) && isset($_SESSION['uid']) && isset($_SESSION['email']))
{
session_destroy();
header("location:user/user_login.php");
}
?>