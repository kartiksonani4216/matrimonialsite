<?php
   include 'conn.php';
   session_start();
   $gender="";
   $uname=$_SESSION['fname'];
   $id=$_SESSION['uid'];
   $rid="";
   $q11="select * from user_registration1 where uid='".$_SESSION['uid']."'";
   
   if($r11=mysqli_query($conn,$q11))
   {
       while($n11=mysqli_fetch_assoc($r11))
       {
           $gender=$n11['gender'];
       }
   }

    $q12="select * from user_request where ruid='$id'";
    if($r12=mysqli_query($conn,$q12))
    {
      while($num12=mysqli_fetch_assoc($r12))
      {
        $rrid=$num12['uid'];
        $status=$num12['status'];
        $rid=$num12['rid'];
      }
    }
 
  
   
    if(isset($_POST['block']))
    {
      $ruid=$_POST['bid'];
      $q33="update user_request set status='block' where ruid='$ruid' and uid='$id'";
      if($r33=mysqli_query($conn,$q33))
      {
        header("location:user_following.php");
      }
    }
    if(isset($_POST['following']))
    {
        $fid=$_POST['fid'];
        $q22="update user_request set status='accept' where uid='$id' and ruid='$fid'";
        if($r22=mysqli_query($conn,$q22))
        {
           header("location:user_block.php");
        }
    }
    if(isset($_POST['follower']))
    {
        $foid=$_POST['foid'];
        $q33="update user_request set status='accept' where uid='$foid' and ruid='$id'";
        if($r33=mysqli_query($conn,$q33))
        {
            header("location:user_block.php");
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/samples/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Apr 2021 08:50:41 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Find Match</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets2/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets2/vendors/css/vendor.bundle.base.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <style>
        .gradient-text {
  
  background-color: #CA4246;
  
  
   background-image: linear-gradient(
        45deg,
        #CA4246 16.666%, 
        #E16541 16.666%, 
        #E16541 33.333%, 
        #F18F43 33.333%, 
        #F18F43 50%, 
        #8B9862 50%, 
        #8B9862 66.666%, 
        #476098 66.666%, 
        #476098 83.333%, 
        #A7489B 83.333%);
  
  background-size: 100%;
  background-repeat: repeat;

  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; 
  
    animation: rainbow-text-simple-animation-rev 0.75s ease forwards;

}

.gradient-text:hover{
    animation: rainbow-text-simple-animation 0.5s ease-in forwards;
}


@keyframes rainbow-text-simple-animation-rev {
    0% {
        background-size: 650%;
    }
    40% {
        background-size: 650%;
    }
    100% {
        background-size: 100%;
    }
}

@keyframes rainbow-text-simple-animation {
    0% {
        background-size: 100%;
    }
    80% {
        background-size: 650%;
    }
    100% {
        background-size: 650%;
    }
}
  


body {
  background-color: #fdf1f0;
}

header {
  margin-top: 1em;
  margin-top: calc(50vh - 3em);
}

h1 {
  font-family: "Archivo Black", sans-serif;
  font-weight: normal;
  font-size: 6em;
  text-align: center;
  margin-bottom: 0;
  margin-bottom: -0.25em;
  display: block;
  margin-left: auto;
  margin-right: auto;
  cursor: pointer;
  width: 605px;
}

    </style>
  
    <link rel="stylesheet" href="../assets2/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets2/images/favicon4.png" />
  </head>
  <body>
          <div class="content-wrapper">
            <div class="page-header">
            <h1 class="gradient-text">Block User</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <a href="dashboard.php"> <li> <p><button class="btn btn-danger">Go Back</button></p></li></a>

                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="row portfolio-grid">
                        <?php 
                        $following=0;
                            $q15="select * from user_request where uid='$id' and status='block'  ";
                            if($r15=mysqli_query($conn,$q15))
                            {
                               
                              while($n1=mysqli_fetch_assoc($r15))
                              {
                                  
                                $reqid=$n1['ruid'];
                                $q1="select * from user_registration1 where uid='$reqid'";
                                if($r1=mysqli_query($conn,$q1))
                                {
                                    while($num=mysqli_fetch_assoc($r1))
                                    {
                                        echo '            
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <a href="images/user/'.$num['img'].'" target="blank"><img src="images/user/'.$num['img'].'"  alt="image" style="height:400px;" />
                                            <figcaption>
                                            <h4><font color="white">'.$num['fname'].'</font></h4>
                                            <form method="post">
                                            <input type="hidden" value="'.$n1['rid'].'" name="rid"/>
                                            <p>
                                            <input type="hidden" name="fid" value="'.$reqid.'">
                                            <button name="following" type="submit" class="btn btn-success mr-2">UnBlock User</button></p>
                                            </p>
                                            </form>
                                          </figcaption>
                                        </figure>
                                      </div>                      ';
                                    }
                                }
                               
                              }
                            }
                            $q15="select * from user_request where ruid='$id' and status='block'  ";
                            if($r15=mysqli_query($conn,$q15))
                            {
                               
                              while($n1=mysqli_fetch_assoc($r15))
                              {
                                  
                                $reqid=$n1['uid'];
                                $q1="select * from user_registration1 where uid='$reqid'";
                                if($r1=mysqli_query($conn,$q1))
                                {
                                    while($num=mysqli_fetch_assoc($r1))
                                    {
                                        echo '            
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <a href="images/user/'.$num['img'].'" target="blank"><img src="images/user/'.$num['img'].'"  alt="image" style="height:400px;" />
                                            <figcaption>
                                            <h4><font color="white">'.$num['fname'].'</font></h4>
                                            <form method="post">
                                            <input type="hidden" value="'.$n1['rid'].'" name="rid"/>
                                            <p>
                                            <input type="hidden" name="foid" value="'.$reqid.'">
                                            <button name="follower" type="submit" class="btn btn-success mr-2">Unblock User</button></p>
                                            </p>
                                            </form>
                                          </figcaption>
                                        </figure>
                                      </div>                      ';
                                    }
                                }
                               
                              }
                            }
                            
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