<?php
	session_start();
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>XCOMPANY</title>
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
			width:40%;
			float:left;
			background-color:lightblue;
		}
		.logoarea h1{
			padding-left:30px;
		}
		.menu_area{
			width:60%;
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
				<li><a href="log.php">Login</a></li>
				<li><a href="regi.php">Registration</a></li>
			</ul>
		</div>
	</div>
	<div class="content_area">
	<fieldset>
	<legend> <h3>LOGIN</h3></legend>
		
		<form method="post">
			<table>
				
				<tr>
					<td><b>Email :</b></td>
					<td><input type="email" name="email"/></td>
					
				</tr>
				
				<tr>
					<td><b>Password :</b></td>
					<td><input type="password" name="pass"/></td>
					
				</tr>
				

				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
					
				</tr>
				
			</table>

		
		</form>
		</fieldset>
	
	</div>
	<div class="footer_area">
		<h3>&copy;all right reserved pronay saha</h3>
	</div>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "company";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		if($_SERVER["REQUEST_METHOD"] == "POST") {
  
		   
		  
		  $sql = "SELECT * FROM users WHERE email = '".$_POST["email"]."' and password = '".$_POST["pass"]."'";
		  $result = $conn->query($sql);
		  if ($result->num_rows > 0)
		  {
			  $_SESSION["email"]=$_POST["email"];
			  
			  header("location: dash.php");
		  }
			  
		  else
			  echo "wrong email or password";
   }
	?>
</body>
</html>