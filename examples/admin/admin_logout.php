<?php
session_start();
if(isset($_SESSION['aname']) && isset($_SESSION['aid']) && isset($_SESSION['aemail']) && isset($_SESSION['aimg']))
{
session_destroy();
header("location:admin_login.php");
}
?>