<?php
include 'conn.php';
session_start();
$uid=$_GET['uid'];
$vid="";
$status='';
$q11="select * from user_registration1 where uid='$uid'";
if($r11=mysqli_query($conn,$q11))
{
    while($num1=mysqli_fetch_assoc($r11))
    {
        $uname=$num1['fname'];
        $email=$num1['email'];
        $img=$num1['img'];
        $hobby=$num1['hobby'];
        $mno=$num1['mno'];
        $dob=$num1['dob'];
        $qualification=$num1['qualification'];
    }
}
if(isset($_POST['view']))
   {
       $uid=$_POST['uid'];
       $q12="insert into visit_profile values('$new','$id','$uname','$uid',current_timestamp())";
       if($r12=mysqli_query($conn,$q12))
       {
        header("location:user_find_partner.php?uid=$uid");
       }
    }

  if(isset($_POST['request']))
  {
    $bytes = random_bytes(3);
    $new=bin2hex($bytes);
    $vid=$_SESSION['uid'];
    $q30="insert into user_request values('$new',$vid,'$uid','request',current_timestamp())";
    if($r30=mysqli_query($conn,$q30))
    {
         header("location:user_find_partner.php?uid=$uid");
    }
  }  
  $vid=$_SESSION['uid'];
  $q213="select * from user_request where uid='$vid' and ruid='$uid'";
   if($r213=mysqli_query($conn,$q213))
   {
       while($num30=mysqli_fetch_assoc($r213))
       {
           $status=$num30['status'];
       }
   }
   else{
       $status="remove";
   }
  if(isset($_POST['remove']))
  {
      $q40="delete from user_request where uid='$vid' and ruid='$uid'";
      if($r40=mysqli_query($conn,$q40))
      {
          header("location:user_find_partner.php?uid=$uid");
      }
  }
  if(isset($_POST['goback']))
  {
          header("location:dashboard.php");
  }
?>


<style>
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>

<title>Visit Profile</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="icon" type="image/png" href="../assets/img/favicon2.png">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/user/<?php echo $img?>" style="height:400px;" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $uname ?>
                                    </h5>
                                    <h6>
                                    <?php echo $hobby ?>
                                    </h6>
                                   
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">About</a>
                            </ul>
                            <div class="col-md-6">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $uid?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $uname?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $email?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>DOB</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dob?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Qualification</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $qualification?></p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                         <form method="post">
                                             <?php
                                                    if($status != 'request')
                                                    {
                                       echo ' <button class="btn btn-info" type="submit" name="request">Request</button>';
                                       
                                                    }
                                                    else{
                                        
                                             echo '<button class="btn btn-danger" type="submit" name="remove">Remove</button>';
                                                        
                                                    }
                                             ?>
                                                <button class="btn btn-warning" name="goback">Go Back</button>
                                     
                                        </form>
                                     
                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                   
                </div>
                
            </form>           
        </div>