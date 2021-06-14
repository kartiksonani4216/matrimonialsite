<?php
if(isset($_SESSION['aname']) && isset($_SESSION['aid']) && isset($_SESSION['aemail']) && isset($_SESSION['aimg']))
{
  $date=date("Y-m-d");
$count=0;
$count1=0;
$count4=0;
$count5=0;
$q20="select * from abuse_report";
if($r20=mysqli_query($conn,$q20))
{
    while($num20=mysqli_fetch_assoc($r20))
     {
          $cdate=$num20['stamp'];
          $cdate=substr($cdate,0,10);
         if($date == $cdate)
        {         
            $count4++;
        }
     }
}
$q21="select * from success_story";
if($r21=mysqli_query($conn,$q21))
{
    while($num21=mysqli_fetch_assoc($r21))
    {
      $cdate2=$num21['stamp'];
      $cdate2=substr($cdate2,0,10);
      if($date == $cdate2)
      {
       
          $count5++;
      }
   
    }
}
$count6=$count4+$count5;
  echo '<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
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
      
      <ul class="navbar-nav">
      
        <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">'.$count6.'</span>
            <p class="d-lg-none d-md-block">
              Some Actions
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
           ';
               $q20="select * from abuse_report";
               if($r20=mysqli_query($conn,$q20))
               {
                 while($num20=mysqli_fetch_assoc($r20))
                 {
                   $cdate=$num20['stamp'];
                   $cdate=substr($cdate,0,10);
                   if($date == $cdate)
                   {
                    echo '
                    <a class="dropdown-item" href="admin_abuse_report.php">'.$num20['uname'].' Send Abuse Report</a>
                       
                       ';
                       $count++;
                   }
                  
                  
                 }
               }
               $q21="select * from success_story";
               if($r21=mysqli_query($conn,$q21))
               {
                   while($num21=mysqli_fetch_assoc($r21))
                   {
                     $cdate2=$num21['stamp'];
                     $cdate2=substr($cdate2,0,10);
                     if($date == $cdate2)
                     {
                      echo '
                      <a class="dropdown-item" href="view_success_story.php">'.$num21['fname'].' Send Success Story</a>
                         
                         ';
                         $count1++;
                     }
                  
                   }
               }
                $count3=$count+$count1;
                if($count3 == 0)
                {
                  echo '
                  <a class="dropdown-item" href="">No Notifiation Today</a>
                  ';
                }

        
   echo '
           
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
            <a class="dropdown-item" href="admin_logout.php">Log out</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>';
} 
else{
  header("location:admin_login.php");
}

?>