<?php
include 'conn.php';
$uid=$_SESSION['uid'];
$vuid="";
$date=date("Y-m-d");
$count=0;
$count1=0;



?>
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Home</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
            
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          
                <?php
                $q11="select * from visit_profile where vuid='$uid'";
                if($r11=mysqli_query($conn,$q11))
                {
                       while($num11=mysqli_fetch_assoc($r11))
                       {
                         $cdate=$num11['stamp'];
                         $cdate=substr($cdate,0,10);
                         if($date == $cdate)
                         {
                          echo ' <a class="dropdown-item" href="user_notification.php">'.$num11['uname'].' Visit Profile</a>
                         
                        ';
                        $count++;
                         }
                         
                       }
                }
                $q12="select * from user_like_photo where rlid='$uid'";
                if($r12=mysqli_query($conn,$q12))
                {
                     while($num12=mysqli_fetch_assoc($r12))
                     {
                       $vid=$num12['uid'];
                       $q20="select * from user_registration1 where uid='$vid'";
                       if($r20=mysqli_query($conn,$q20))
                       {
                         while($num20=mysqli_fetch_assoc($r20))
                         {
                           $fname=$num20['fname'];
                         }
                       }
                       $cdate1=$num12['stamp'];
                       $cdate1=substr($cdate1,0,10);
                       if($date == $cdate1)
                       {
                        echo ' <a class="dropdown-item" href="user_like.php">'.$fname.' Like Your Photo</a> 
                        ';
                        $count1++;
                       }
                     
                     }
                }
                $count3=$count+$count1;
                if($count3 == 0)
                {
                  echo ' <a class="dropdown-item" href="">No Notification Today</a> 
                  ';
                }
                ?>
                </div>
               
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="user_view_profile.php">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="user_logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>