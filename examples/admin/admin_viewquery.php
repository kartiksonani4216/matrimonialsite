<?php
include '../conn.php';
session_start();
$cid=$_GET['cid'];
$msg="";
$error="";
$q21="select * from contact_us where cid='$cid'";
if($r21=mysqli_query($conn,$q21))
{
    while($num21=mysqli_fetch_assoc($r21))
    {
        $fname=$num21['uname'];
        $email=$num21['email'];
        $mno=$num21['mno'];
        $msg=$num21['msg'];
    }
} 


?>
<style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}</style>
<title>Bridal Contact Us</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.common.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" type="image/png" href="../assets/img/favicon2.png">

<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">


  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="user_query.php"><font color="black">Go Back</font></a></li>
                </ol>
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png    " alt="rocket_contact"/>
            </div>
            
           
            <form method="post">
        
           
                <h3><?php echo $fname ;?> Shared Feedback</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control"  value="<?php echo $fname?>" disabled/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control"  value="<?php echo $email ?>" disabled />
                        </div>
                        <div class="form-group">
                            <input type="text" name="mno" class="form-control"  value="<?php echo $mno ?>" disabled/>
                        </div>
           
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" disabled><?php echo $msg ;?></textarea>
                     
                    </div>
                    <div>
                    <a href="mailto:<?php echo $email;?>?subject=subject" target="blank">
                    <button type="button"  class="btn btn-success">Reply</button>
                    </a>
                    </div>    
                </div>
            </form>
</div>