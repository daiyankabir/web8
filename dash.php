<?php
	session_start();
	$username=$_SESSION["email"];
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>X-COMPANY</title>
	<style>
		body{
			margin:0;
			padding:0px 50px;
		}
		a{
			text-decoration:none;
		}
		.header_area{
			width:100%;
			
			
		}
		.logoarea{
			width:35%;
			float:left;
			background-color:lightblue;
		}
		.logoarea h1{
			padding-left:30px;
		}
		.menu_area{
			width:65%;
			float:left;
			background-color:lightblue;
		}
		.menu_area ul{
			list-style:none;
			text-align:right;
		}
		.menu_area ul li{
			display:inline-block;
			padding:15px;
			color:white;
		}
		.menu_area ul li a{
			
			color:white;
		}
		.content_area{
			height:500px;
			width:100%;
			overflow:hidden;
			background-color:lightblue;
		}
		.content_left{
			width:35%;
			float:left;
		}
		
		.content_right{
			width:65%;
			float:left;
		}
		.footer_area{
			width:100%;
			overflow:hidden;
			background-color:black;
			color:white;
		}
		.footer_area h3{
			text-align:center;
		}
	</style>
</head>
<body>
	<div class="header_area">
		<div class="logoarea">
			<h1><span class="x">X</span>Company</h1>
		</div>
		<div class="menu_area">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Logged in as <a style="color:black;" href="profile.php"><?php echo $username; ?></a></li>
				<li><a href="log.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<div class="content_area">
		<div class="content_left">
			<h3>Account</h3>
			<ul>
				<li><a href="dash.php">Dashboard</a></li>
				<li><a href="view.php">View Profile</a></li>
				<li><a href="edit.php">Edit Profile</a></li>
				<li><a href="changepicture.php">Change Profile Picture</a></li>
				<li><a href="changepassword.php">Change Password</a></li>
				<li><a href="show.php">Products</a></li>
				<li><a href="add.php">Add Product</a></li>
			</ul>
		</div>
		<div class="content_right">
			<h2>Welcome <?php echo $username; ?></h2>
			
		</div>
	</div>
	<div class="footer_area">
		<h3>&copy;all right reserved pronay saha</h3>
	</div>
</body>
</html>