

<?php 
include '../conn.php';

    session_start();
 
    $error=FALSE;
    $msg=FALSE;
    if(isset($_POST['submit']))
    {
      $email=$_POST['email'];       
          $sql_confirm="select * from user_registration1 where email='$email'";
          
          $total_query=mysqli_query($conn,$sql_confirm);
          $total_rec=mysqli_num_rows($total_query);
              if($total_rec==1)
              {

                $email_rec=mysqli_fetch_assoc($total_query);
                $_SESSION['email']=$email_rec['email'];
                $msg="We are send otp";
                header("refresh:3;url=mail/smtp.php");
              }
              else
              {
                $error="Your email not match";
              }    
    }
    $q11="select * from admin_login";
    if($r11=mysqli_query($conn,$q11))
    {
        while($num11=mysqli_fetch_assoc($r11))
        {
          $img=$num11['aimg'];
        }  
    }


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Apr 2021 08:50:33 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forgot | Bridal</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets2/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets2/vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.common.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets2/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/img/favicon2.png" />
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
        <div class="container-fluid page-body-wrapper full-page-wrapper" >
            <div class="content-wrapper d-flex align-items-center auth" style="background-image: url('../../assets/img/login.jpg'); background-size: cover; background-position: top center;">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img
                                    src="../images/admin/<?php echo $img ?>">
                            </div>
                            <h4>Hello! Forgot Your Password</h4>
                            <h6 class="font-weight-light">Enter Email To Continue .</h6>
                            <form class="pt-3" method="post">
                         
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email" 
                                        placeholder="Email" name="email" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Forgot Password</button>
                                </div>
                                
                                <div class="text-center mt-4 font-weight-light"> Back to login? <a
                                        href="user_login.php" class="text-primary">Go</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets2/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets2/js/off-canvas.js"></script>
    <script src="../../assets2/js/hoverable-collapse.js"></script>
    <script src="../../assets2/js/misc.js"></script>
    <script src="../../assets2/js/settings.js"></script>
    <script src="../../assets2/js/todolist.js"></script>
    <!-- endinject -->

</body>

<!-- Mirrored from www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Apr 2021 08:50:33 GMT -->

</html>