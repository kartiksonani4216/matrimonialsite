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
        </a></div>
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
              <i class="material-icons">	&#10084;</i>
              <p> Like </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user_like.php">
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
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">image</i>
              <p> Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="pages/pricing.html">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Pricing </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="pages/rtl.html">
                    <span class="sidebar-mini"> RS </span>
                    <span class="sidebar-normal"> RTL Support </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="pages/timeline.html">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Timeline </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="pages/login.html">
                    <span class="sidebar-mini"> LP </span>
                    <span class="sidebar-normal"> Login Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="pages/register.html">
                    <span class="sidebar-mini"> RP </span>
                    <span class="sidebar-normal"> Register Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="pages/lock.html">
                    <span class="sidebar-mini"> LSP </span>
                    <span class="sidebar-normal"> Lock Screen Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="pages/user.html">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="pages/error.html">
                    <span class="sidebar-mini"> E </span>
                    <span class="sidebar-normal"> Error Page </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">apps</i>
              <p> Components
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                    <span class="sidebar-mini"> MLT </span>
                    <span class="sidebar-normal"> Multi Level Collapse
                      <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse" id="componentsCollapse">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="#0">
                          <span class="sidebar-mini"> E </span>
                          <span class="sidebar-normal"> Example </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="components/buttons.html">
                    <span class="sidebar-mini"> B </span>
                    <span class="sidebar-normal"> Buttons </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="components/grid.html">
                    <span class="sidebar-mini"> GS </span>
                    <span class="sidebar-normal"> Grid System </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="components/panels.html">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Panels </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="components/sweet-alert.html">
                    <span class="sidebar-mini"> SA </span>
                    <span class="sidebar-normal"> Sweet Alert </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="components/notifications.html">
                    <span class="sidebar-mini"> N </span>
                    <span class="sidebar-normal"> Notifications </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="components/icons.html">
                    <span class="sidebar-mini"> I </span>
                    <span class="sidebar-normal"> Icons </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="components/typography.html">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Typography </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
              <i class="material-icons">content_paste</i>
              <p> Forms
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="forms/regular.html">
                    <span class="sidebar-mini"> RF </span>
                    <span class="sidebar-normal"> Regular Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="forms/extended.html">
                    <span class="sidebar-mini"> EF </span>
                    <span class="sidebar-normal"> Extended Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="forms/validation.html">
                    <span class="sidebar-mini"> VF </span>
                    <span class="sidebar-normal"> Validation Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="forms/wizard.html">
                    <span class="sidebar-mini"> W </span>
                    <span class="sidebar-normal"> Wizard </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
              <i class="material-icons">grid_on</i>
              <p> Tables
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="tables/regular.html">
                    <span class="sidebar-mini"> RT </span>
                    <span class="sidebar-normal"> Regular Tables </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="tables/extended.html">
                    <span class="sidebar-mini"> ET </span>
                    <span class="sidebar-normal"> Extended Tables </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="tables/datatables.net.html">
                    <span class="sidebar-mini"> DT </span>
                    <span class="sidebar-normal"> DataTables.net </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
         
        
          <li class="nav-item ">
            <a class="nav-link" href="charts.html">
              <i class="material-icons">timeline</i>
              <p> Charts </p>
            </a>
          </li>
        
        </ul>
      </div>
      <div class="sidebar-background"></div>
    </div>
    