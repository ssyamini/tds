<?php
session_start();
include_once "conn.php";
session_set();
$sql1 = "SELECT * FROM `admincreate` WHERE `email` = '".$_SESSION['e']."' ";
	$data1 = mysqli_query($conn , $sql1);

	while($row = mysqli_fetch_assoc($data1)) {
	$username = $row['username'];
	$orgname  = $row['organization'];
	$mail = $row['email'];
	$password = $row['password'];
	$number  = $row['number'];
	

}
if(isset($_POST['organization']))
{
	$organization  = $_POST['organization'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];
	$pname = $_POST['personname'];
	$number  = $_POST['phonenumber'];
	$tan = $_POST['tan'];
	$city = $_POST['city'];
	$area = $_POST['area'];
	$service = $_POST['service'];
	
	
	
	$sql = "INSERT INTO `usercreate` ( `organization` , `email` , `password` , `pname` , `number` , `tan` , `city` , `area` , `service` , `username`) VALUES ('".$organization."' , '".$mail."' , '".$password."' , '".$pname."' , '".$number."' , '".$tan."' , '".$city."' , '".$area."' , '".$service."' , '".$username."')";
	$data = mysqli_query($conn,$sql);
	echo $sql;
	if($data)
	{
		echo 'moved database';
	}
	else{
		echo 'not moved'.mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>User Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel = "stylesheet" href="css/style.css">
	
	 <style>
	 .main_nav_img {
			    max-height: 30px !important;
				margin-top: -6px !important;
				border-radius: 50%;		
				}
				
		.navbar-main-sm {
			height: 44px !important;
			min-height: 44px !important;
			}
			
		.navbar-second-sm {
			height: 40px !important;
			min-height: 44px !important;
			
			}
	 </style>
	 <?php
	 include_once "style.php";
	 include_once "script.php";
	 ?>
</head>
<body class="navbar-top-sm-xs">

<!--Top navbars position-->
<div class="navbar-fixed-top">
<!-- Main navbar -->

	<div class="navbar navbar-inverse bg-beige navbar-main-sm">
		<div class="navbar-header">
			<a class="navbar-brand" <h2 style="font-size: 18px;">Adro</h2></a>
		</div>
		<div class="navbar-collapse collapse" id="navbar-first">
			<ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img class="main_nav_img" src="assets/images/placeholder.jpg" alt="">
						<span><?php echo "$orgname";?></span>
						<i class="caret"></i>
					</a> 

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><span class="badge badge-warning pull-right"></span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="adminlogout.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Second navbar -->
<div class="navbar-collapse collapse" id="navbar-second">
	<div class="navbar navbar-default navbar-second-sm">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav navbar-nav-material" style="margin-left: -196px";>
				<li class=""><a href=""><i class="icon-display4 position-left"></i> Dashboard</a></li>
				<li class="active"><a href="usercreate.php"><i class="icon-puzzle4 position-left"></i>AddUser</a></li>
				<li class=""><a href="usertable.php"><i class="icon-puzzle4 position-left"></i>Clients</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- /second navbar -->
</div>
<!--/Top navbars position-->

<div class="container-fluid">
			 <div class="col-lg-6 col-md-3 col-md-offset-3">
			  <div class="panel panel-white" style="margin-top:110px">
				 <div class="panel-heading">
					 <h6 class="panel-title">Create User</h6>
					<form action ="" method="POST">
						<div class="form-group">
						<input type = "text" class="form-control" id ="orgname" name="organization" placeholder = "Enter Organization Name">
						</div>
						<div class="form-group">
						<input type = "email" class="form-control" id ="mail" name="mail" placeholder = "Enter Email">
						</div>
						<div class="form-group">
						<input type = "password" class="form-control" id ="password" name="password" placeholder = "Enter Password">
						</div>
						<div class="form-group">
						<input type="text" class="form-control" id="pname" name="personname" Placeholder="Enter Authorised Person Name">
					    </div>
						<div class="form-group">
						<input type = "number" class="form-control" id ="number" name="phonenumber" placeholder = "Enter Phonenumber">
						</div>
						<div class="form-group">
						<input type="text" class ="form-control" id="tan" name="tan" Placeholder="Enter Tan">
						</div>
						<div class="form-group">
						<input type="text" class ="form-control" id="city" name="city" Placeholder="Enter City">
						</div>
						<div class="form-group">
						<input type="text" class ="form-control" id="area" name="area" Placeholder="Enter Area">
						</div>
						<div cass="form-group">
						<input tpye="text" class="form-control" id="service" name="service" Placeholder="Enter Service Charges">
					    </div>
						<input type="submit" name="submit" value="submit" class="btn btn-md btn-success">

					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
