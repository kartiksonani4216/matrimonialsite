<?php
 include 'conn.php';
 session_start();
 if(isset($_SESSION['fname']) && isset($_SESSION['uid']) && isset($_SESSION['email']) )
 {
 $pid="";
 if(isset($_GET['uid']))
 {
    $pid=$_GET['uid'];
 }
 $uid=$_SESSION['uid'];
 if(isset($_POST['like']))
 {
     $picid=$_POST['picid'];
    $bytes = random_bytes(3);
    $new=bin2hex($bytes);
    $q20="insert into user_like_photo values('$new','$picid','$uid','$pid','like',current_timestamp())";
    if($r20=mysqli_query($conn,$q20))
    {
        header("location:user_partner_gallery.php?uid=$pid");
    }
  
}
if(isset($_POST['unlike']))
{
     $picid2=$_POST['picid'];
    $q50="delete from user_like_photo where pid='$picid2' and uid='$uid' and rlid='$pid'";
    if($r50=mysqli_query($conn,$q50))
    {
        header("location:user_partner_gallery.php?uid=$pid");
    }
}
 }
 else{
   header("location:user/user_login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/samples/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Apr 2021 08:50:41 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bridal Gallery</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets2/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets2/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets2/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets2/images/favicon3.png" />
  </head>
  <body>
          <div class="content-wrapper" style="background-image: url('../assets/img/login.jpg'); background-size: cover; background-position: top center;">
            <div class="page-header">
              <h3 class="page-title"> Gallery </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="dashboard.php"><font color="black">Go Back</font></a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body" >
                    <div class="row">
                      <div class="col-12">
                        <div class="row portfolio-grid">
                            <?php 
                            $q2="select * from user_registration1 where uid='$pid'";
                            if($r2=mysqli_query($conn,$q2))
                            {
                                while($num=mysqli_fetch_assoc($r2))
                                {
                                    $fname=$num['fname'];
                                }
                            }
                            $q1="select * from user_album where uid='$pid'";
                            if($r1=mysqli_query($conn,$q1))
                            {
                                while($num=mysqli_fetch_assoc($r1))
                                {
                                    echo '  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <figure class="effect-text-in">
                                      <a href="images/album/'.$num['img'].'" target="blank"><img src="images/album/'.$num['img'].'"  alt="image" style="height:400px;" />
                                      <figcaption>
                                        <h4><font color="white">'.$fname.'</font></h4>
                                        ';
                                    $q11="select * from user_like_photo where pid='".$num['pid']."' and uid='$uid' and rlid='$pid'";
                                    if($r11=mysqli_query($conn,$q11))
                                    {
                                        $nrows=mysqli_num_rows($r11);
                                        if($nrows==0)
                                        {
                                            echo '<form method="post">
                              
                                            <p>
                                                    <input type="hidden" name="picid" value="'.$num['pid'].'">
                                                    <button name="like" type="submit" class="btn btn-success mr-2">Like Photo</button></p>
                                                    </form>
                                                  </figcaption>
                                                </figure>
                                              </div>
                                           ';
                                        }
                                        else
                                        {
                                            while($num11=mysqli_fetch_assoc($r11))
                                            {
                                                $status=$num11['status'];
                                                if($status == "like")
                                                {
                                                    echo '<form method="post">
                                                    <p>
                                                            <input type="hidden" name="picid" value="'.$num['pid'].'">
                                                            <button name="unlike" type="submit" class="btn btn-danger mr-2">Unlike Photo</button></p>
                                                            </form>
                                                          </figcaption>
                                                        </figure>
                                                      </div>
                                                   ';
                                                }       
                                            }
                                        }
                                        
                                    }
                                      
                                  
                                        
                                    
                                }
                            }
                        
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/3.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Tech Geeks</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/4.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Explore World</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/5.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Travel</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/6.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Colors</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/7.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Through Nature</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/8.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>World</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/9.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Cultures</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/10.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Habits</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/11.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Being yourself</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/12.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Nature</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/13.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Routines</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/14.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Life</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        //   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        //     <figure class="effect-text-in">
                        //       <img src="../assets2/images/samples/300x300/15.jpg" alt="image" />
                        //       <figcaption>
                        //         <h4>Vision</h4>
                        //         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        //       </figcaption>
                        //     </figure>
                        //   </div>
                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="https://www.bootstrapdash.com/" target="_blank"></a>Bridal For Better Partner. All rights reserved.</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
    
        <!-- main-panel ends -->
      <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
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

<!-- Mirrored from www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/samples/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Apr 2021 08:50:41 GMT -->
</html>