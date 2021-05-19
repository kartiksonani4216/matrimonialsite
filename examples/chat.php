<?php
// $refreshAfter=6;
// header('Refresh: ' . $refreshAfter);
include 'conn.php';
session_start();
$uid=$_SESSION['uid'];
$cid=$_GET['uid'];
$nrow='';
$bytes = random_bytes(3);
$new=bin2hex($bytes);
$q12="select * from user_registration1 where uid='$uid'";
if($r12=mysqli_query($conn,$q12))
{
	while($num12=mysqli_fetch_assoc($r12))
	{
		$gender=$num12['gender'];
		$img=$num12['img'];
	}
}
$q13="select * from user_registration1";
if($r13=mysqli_query($conn,$q13))
{
    $nrow=mysqli_num_rows($r13)	;
}
if(isset($_POST['submit']))
{
	$message=$_POST['message'];
	$message=str_replace("'","''",$message);
	$q20="insert into message values('$new','$uid','$cid','$message',current_timestamp())";
	if($r20=mysqli_query($conn,$q20))
	{
		header("location:chat.php?uid=$cid");
	}
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
	<head>
		<title>Bridal Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="../assets/img/favicon2.png">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	    <script>
            	$(document).ready(function(){
$('#action_menu_btn').click(function(){
	$('.action_menu').toggle();
});
	});
        </script>
      <style>
          	body,html{
			height: 100%;
			margin: 0;
			background: #7F7FD5;
	       background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
	        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
		}

		.chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		.card{
			height: 500px;
			border-radius: 15px !important;
			background-color: rgba(0,0,0,0.4) !important;
		}
		.contacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}
	 .card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
	}
		.container{
			align-content: center;
		}
		.search{
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
		}
		.search:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.type_msg{
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
			.type_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.attach_btn{
	border-radius: 15px 0 0 15px !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
	border-radius: 0 15px 15px 0 !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.search_btn{
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.contacts{
			list-style: none;
			padding: 0;
		}
		.contacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}
	.active{
			background-color: rgba(0,0,0,0.3);
	}
		.user_img{
			height: 70px;
			width: 70px;
			border:1.5px solid #f5f6fa;
		
		}
		.user_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.img_cont{
			position: relative;
			height: 70px;
			width: 70px;
	}
	.img_cont_msg{
			height: 40px;
			width: 40px;
	}
	.online_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.offline{
		background-color: #c23616 !important;
	}
	.user_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.user_info span{
		font-size: 20px;
		color: white;
	}
	.user_info p{
	font-size: 10px;
	color: rgba(255,255,255,0.6);
	}
	.video_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.video_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
	}
	.msg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 25px;
		background-color: #82ccdd;
		padding: 10px;
		position: relative;
	}
	.msg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #78e08f;
		padding: 10px;
		position: relative;
	}
	.msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_head{
		position: relative;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}
      </style>
    </head>
	<!--Coded With Love By Mutiullah Samim-->
	<body>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<?php
						    $q123="select * from user_registration1 where uid='$cid'  ";
							if($r123=mysqli_query($conn,$q123))
							{
								while($num123=mysqli_fetch_assoc($r123))
								{
									$aname=$num123['fname'];
									$aimg=$num123['img'];
									echo '<li class="active">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="images/user/'.$num123['img'].'" class="rounded-circle user_img">
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>'.$num123['fname'].'</span>
											<p>'.$num123['fname'].' is online</p>
										</div>
									</div>
								</li>';
								}
							}	
						?>
						
						<?php
						     $q1="select * from user_registration1 where uid!='$cid' and gender!='$gender' LIMIT 0,$nrow";
								 if($r1=mysqli_query($conn,$q1))
								 { 
                     
						 		
									 while($num1=mysqli_fetch_assoc($r1))
									 {
										echo '
										
										<li>
										
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/user/'.$num1['img'].'" class="rounded-circle user_img">
												<span class="online_icon offline"></span>
											</div>
											
											<div class="user_info">
												<a href="chat.php?uid='.$num1['uid'].'" style="text-decoration:none"><span>'.$num1['fname'].'</span></a>
												<p>'.$num1['fname'].' left 7 mins ago</p>
											</div>
											
										
										</div>
										
									</li>
									';
									 }
								 } 
						?>
					
					
						</ui>
					</div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="images/user/<?php  echo $aimg?>" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span> <?php echo $aname?></span>
									<p>1767 Messages</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-plus" style="color:green;"></i> <font color="green"><b>Add to group</b></font></li>
									<li><i class="fas fa-ban" style="color:yellow;"></i><font color="yellow"> Block</font></li>
									<a href="dashboard.php" style="text-decoration:none;"><li><i class="fas fa-angle-double-left" style="color:red;" ></i><font color="red" > LogOut</font></li></a>
									<a href="dashboard.php" style="text-decoration:none;"><li><i class="fas fa-lock" style="color:blue;" ></i><font color="blue" > Lock</font></li></a>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">
						<?php 
						$q11="select * from message order by stamp";
						if($r11=mysqli_query($conn,$q11))
						{
							while($n11=mysqli_fetch_assoc($r11))
							{
								if($n11['uid']==$_SESSION['uid'] and  $cid==$n11['rid'])
								{
									echo '<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
									'.$n11['message'].'
										<span class="msg_time_send">'.$n11['stamp'].'</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/user/'.$img.'" class="rounded-circle user_img_msg">
									</div>
								</div>
								';
								}
								elseif($n11['rid']==$uid and $cid==$n11['uid'])
								{
								
								echo '	<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="images/user/'.$aimg.'" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									'.$n11['message'].'
									<span class="msg_time">'.$n11['stamp'].'</span>
								</div>
							</div>
						';
								}
							}
						}
						?>	
						
					</div>
					<form method='post' >
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<textarea name="message" class="form-control type_msg" placeholder="Type your message..." required></textarea>
								<div class="input-group-append">
									<button class="fas fa-location-arrow" type="submit" name="submit" style="background-color:#2E4053;border:none;outline:none"></button>
								</div>
							</div>
						</div>
						</form>
					
				</div>
			</div>
		</div>
	</body>
</html>
