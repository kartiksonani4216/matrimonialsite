<?php
include '../conn.php';
$aid=$_SESSION['aid'];
$aname=$_SESSION['aname'];
$aimg=$_SESSION['aimg'];

?>



<div class="sidebar" data-color="orange" data-background-color="black" data-image="../../assets/img/sidebar-3.jpg">
 
      <div class="logo"><a href="http://www.creative-tim.com/" class="simple-text logo-mini">
          Ct
        </a>
        <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
          Bridal
        </a></div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="../images/admin/<?php echo $aimg; ?>" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?php
                      echo  'Admin';
                ?>
              </span>
            </a>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="admin_dashboard.php">
              <i class="material-icons">home</i>
              <p> Home </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin_viewuser.php">
              <i class="material-icons">person</i>
              <p> Active User </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin_blockuser.php">
              <i class="material-icons">block</i>
              <p> Block User </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user_uploads.php">
              <i class="material-icons">photo</i>
              <p> User Uploads </p>
            </a>
          </li> 
          <!-- <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#photoexample">
              <i class="material-icons">account_balance</i>
              <p> Add Subscription Plan     
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="photoexample">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="flip.php">
                    <span class="sidebar-mini"> AP </span>
                    <span class="sidebar-normal"> Add Plan</span>
                  </a>
                </li> 
                <li class="nav-item ">
                  <a class="nav-link" href="user_add_photo.php">
                    <span class="sidebar-mini"> VP </span>
                    <span class="sidebar-normal"> View Plan </span>
                  </a>
                </li>            
              </ul>
            </div>
          </li> -->
          <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#successStory">
            <i class="material-icons">favorite</i>
            <p> Success Story
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="successStory">
            <ul class="nav">
              <li class="nav-item ">
                <a class="nav-link" href="view_success_story.php">
                  <span class="sidebar-mini"> VS </span>
                  <span class="sidebar-normal"> View Story </span>
                </a>
              </li>            
            </ul>
          </div>
        </li>
          <li class="nav-item ">
            <a class="nav-link" href="user_query.php">
              <i class="material-icons">star</i>
              <p> Feedback </p>
            </a>
          </li>  
          <li class="nav-item ">
            <a class="nav-link" href="user_query.php">
              <i class="material-icons">star</i>
              <p> Abuse Report </p>
            </a>
          </li>      
          <li class="nav-item ">
            <a class="nav-link" href="user_query.php">
              <i class="material-icons">people</i>
              <p> Generate Fake Users </p>
            </a>
          </li>    
          <li class="nav-item ">
            <a class="nav-link" href="user_query.php">
              <i class="material-icons">settings</i>
              <p> Settings </p>
            </a>
          </li> 
              
        
        
        </ul>
      </div>
      <div class="sidebar-background"></div>
    </div>
    