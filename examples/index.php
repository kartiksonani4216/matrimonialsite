<?php
session_start();
include "conn.php";
$error=FALSE;
$msg=FALSE;
$pass="";
if(isset($_SESSION['uname']) && isset($_SESSION['uid']) && isset($_SESSION['uemail']) )
{
    if(isset($_POST['submit']))
    {
        $q2="select * from user_register where uid='".$_SESSION['uid']."'";
        if($r2=mysqli_query($conn,$q2))
        {
            while($num1=mysqli_fetch_assoc($r2))
            {
                $status=$num1['account_status'];
                if($status == 1)
                {
                    $q3="update user_register set account_status='0' where uid='$uid'";
                        if($r3=mysqli_query($conn,$q3))
                        {
                            $msg="Account DeActivated SuccesFully....Now LogOut....";
                            header("refresh:0;url=../../logout.php");
                        }
                        else
                        {
                            $error="Account Activation Failed...Please Try Again...";
                        }
                }
                else
                {
                    $error="Account Already Blocked";
                }
            }
        }
        else
        {
            $error="Account Deactivation is Failed";
        }

    }
    if(isset($_POST['goback']))
    {
        header("refresh:0;url=index.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Apr 2021 08:50:34 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bridal | Index Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets2/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets2/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.common.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets2/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/img/favicon2.png" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth" style="background-image: url('../assets/img/login.jpg'); background-size: cover; background-position: top center;">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-transparent text-left p-5 text-center">
                        <h1></h1>
                            <div class="brand-logo">
                            <img src=""
                                    style="height:200;width:500px;margin-right:150px;padding-right:150px;">
                            </div>
                            <button type="button" class="btn btn-danger" style="height:50px;width:150px;opacity:0.8;"><a href="user/user_register.php" style="color:black;font-size:21px;text-decoration:none;" >Register</a></button>
                            <button type="button" class="btn btn-warning"  style="height:50px;width:150px;opacity:0.8;"><a href="user/user_login.php" style="color:black;font-size:21px;text-decoration:none;">Login</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script src="../assets2/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets2/js/off-canvas.js"></script>
    <script src="../assets2/js/hoverable-collapse.js"></script>
    <script src="../assets2/js/misc.js"></script>
    <script src="../assets2/js/settings.js"></script>
    <script src="../assets2/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Apr 2021 08:50:34 GMT -->

</html>