<?php
session_start();
include "conn.php";
if(isset($_SESSION['fname']) && isset($_SESSION['uid']) && isset($_SESSION['email']) )
{
$error=FALSE;
$msg=FALSE;
$uname=$_SESSION['fname'];
$uid=$_SESSION['uid'];
$uemail=$_SESSION['email'];
$pass="";
$q11="select * from user_registration1 where uid='$uid'";
if($r11=mysqli_query($conn,$q11))
{
   while($num11=mysqli_fetch_assoc($r11))
   {
     $img=$num11['img'];
   }
}

    if(isset($_POST['submit']))
    {
        $opass=$_POST['opass'];
        $npass=$_POST['npass'];
        $ncpass=$_POST['ncpass'];
        $q2="select * from user_registration1 where uid='$uid'";
        if($r2=mysqli_query($conn,$q2))
        {
            while($num1=mysqli_fetch_assoc($r2))
            {
                $pass=$num1['pass'];

                if(password_verify($opass,$pass))
                {
                    if($ncpass == $npass)
                    {
                      $npass=password_hash($npass,PASSWORD_DEFAULT);
                        $q3="update user_registration1 set pass='$npass' where uid='$uid'";
                        if($r3=mysqli_query($conn,$q3))
                        {
                            $msg="Password Updated SuccesFully....Now Login Again....";
                            header("refresh:0;url=user_logout.php");
                        }
                        else
                        {
                          $error="Not Come";
                        }
                    }
                    else
                    {
                        $error="New Password and Confirm Password Not Match...Please Try Again...";
                    }
                }
                else
                {
                    $error="You are Entered Wrong Password...Please Check Again...";
                }
            }
        }
        else
        {
            $error="Passwod Updation is Failed";
        }

    
    if(isset($_POST['goback']))
    {
        header("refresh:0;url=dashboard.php");
    }
    
}
}
else{
  header("location:user/user_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Apr 2021 08:50:34 GMT -->
<head>
    <style>
      input[placeholder], [placeholder], *[placeholder] {
    color: yellow !important;
}
::placeholder{
  color:white !important;
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bridal User Change Password</title>
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
  <?php 
            if($msg)
            {
              echo '<script>swal("Well Done!", "'.$msg.'", "success");</script>';  
            }
            if($error)
            {
              echo '<script>swal("Oops!", "'.$error.'", "error");</script>';
            }
            ?>
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-transparent text-left p-5 text-center">
                <img src="images/user/<?php echo $img ?>" style="height:135px;width:135px;border-radius: 50%;" class="lock-profile-img" alt="img">
                <form class="pt-5" method="post">
                  <div class="form-group">
                    <input type="password" class="form-control text-center text-white font-weight-bold " id="examplePassword1" name="opass" placeholder="Old Password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control text-center text-white font-weight-bold" id="examplePassword1" name="npass" placeholder="New Password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control text-center text-white  font-weight-bold" id="examplePassword1" name="ncpass" placeholder="Confirm New Password" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium" name="submit">Change Password</button>
                    </form>
                   <button type="submit"class="btn btn-block btn-primary btn-lg font-weight-medium"> <a href="dashboard.php" style="text-decoration:none;color:white;">Go Back</a></button>
                  </div>
               
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

