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
			<h3>Profile</h3>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "company";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT id,name, username, email,password,picture FROM users WHERE email='".$_SESSION["email"]."'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					echo "<table>";
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>id :</td>";
						echo "<td>".$row["id"]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>password :</td>";
						echo "<td>".$row["password"]."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>Name :</td>";
						echo "<td>".$row["name"]."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>Email :</td>";
						echo "<td>".$row["email"]."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>Username :</td>";
						echo "<td>".$row["username"]."</td>";
						echo "</tr>";

						echo "<tr>";
						echo "<td>Profile Picture :</td>";
						 $pic=$row["picture"];
						
						echo "</tr>";
					

					}
					echo "</table>";
				} else {
					echo "0 results";
				}

				$conn->close();
				
				
			 ?>
             <img src="<?php echo $pic; ?>" height="80" width="80"/>;
			
		</div>
	</div>
	<div class="footer_area">
		<h3>&copy;all right reserved pronay saha</h3>
	</div>
</body>
</html>