<?php
include 'conn.php';
$uid=$_SESSION['uid'];
$fname=$_SESSION['fname'];
$q1="select * from user_registration1 where uid='$uid'";
if($r1=mysqli_query($conn,$q1))
{
  while($num1=mysqli_fetch_assoc($r1))
  {
    $img=$num1['img'];
    $gender=$num1['gender'];
  }
}

$q12="select * from user_registration1 where uid!='$uid' and gender!='$gender' LIMIT 1";
if($r12=mysqli_query($conn,$q12))
{
  while($num12=mysqli_fetch_assoc($r12))
  {
      $id=$num12['uid'];
  }
}



?>



<div class="sidebar" data-color="orange" data-background-color="black" data-image="../assets/img/sidebar-3.jpg">

    <div class="logo"><a href="http://www.creative-tim.com/" class="simple-text logo-mini">
            Ct
        </a>
        <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
            Bridal
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="images/user/<?php echo $img?>" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        <?php
                      echo $fname;
                ?>
                    </span>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href="dashboard.php">
                    <i class="material-icons">home</i>
                    <p> Home </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="findmatch.php">
                    <i class="material-icons">search</i>
                    <p> Find Matches </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#profileExample">
                    <i class="material-icons">person</i>
                    <p> Profile
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="profileExample">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="user_view_profile.php">
                                <span class="sidebar-mini"> VP </span>
                                <span class="sidebar-normal"> View Profile </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="user_edit_profile.php">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#photoexample">
                    <i class="material-icons">image</i>
                    <p> My Photo
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="photoexample">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="flip.php">
                                <span class="sidebar-mini"> VP </span>
                                <span class="sidebar-normal"> Gallery</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="user_add_photo.php">
                                <span class="sidebar-mini"> NP </span>
                                <span class="sidebar-normal"> Add New Photo </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="user_request.php">
                    <i class="material-icons">send</i>
                    <p> Request </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="user_like.php">
                    <i class="material-icons"> &#10084;</i>
                    <p> Like </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="user_block.php">
                    <i class="material-icons">block</i>
                    <p> Block User </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#successStory">
                    <i class="material-icons">account_balance</i>
                    <p> Success Story
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="successStory">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="add_success_story.php">
                                <span class="sidebar-mini"> SS </span>
                                <span class="sidebar-normal"> Add Success Stroy </span>
                            </a>
                        </li>
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
                <a class="nav-link" href="user_notification.php">
                    <i class="material-icons">notifications</i>
                    <p> Visit Profile </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="chat.php?uid=<?php echo $id?>">
                    <i class="material-icons">chat</i>
                    <p> Chat </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#freinds">
                    <i class="material-icons">person</i>
                    <p> Friends
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="freinds">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="user_follower.php">
                                <span class="sidebar-mini"> VF </span>
                                <span class="sidebar-normal"> View Followers </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="user_following.php">
                                <span class="sidebar-mini"> VF </span>
                                <span class="sidebar-normal"> View Following </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="contact_us.php">
                    <i class="material-icons">phone</i>
                    <p> Contact Us </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="user_abuse_report.php">
                    <i class="material-icons">email</i>
                    <p> Abuse Report </p>
                </a>
            </li>   
        </ul>
    </div>
    <div class="sidebar-background"></div>
</div>